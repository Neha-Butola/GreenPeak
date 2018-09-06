'use strict';

const webpack = require('webpack');
const path = require('path');
const CleanWebpackPlugin = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const FriendlyErrorsWebpackPlugin = require('friendly-errors-webpack-plugin');


const isProduction = process.env.NODE_ENV === 'production';

module.exports = {
  context: __dirname,
  entry: {
    app: path.join(__dirname, 'app', "src", "js", "index.js"),
  },
  output: {
    path: path.join(__dirname, 'app', 'dist'),
    publicPath: '',
    filename: "js/[name].js"
  },
  externals: {
    jquery: 'jQuery',
  },
  module: {
    rules: [{
        test: /\.js$/,
        loader: 'babel-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: !isProduction,
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: !isProduction,
              plugins: (loader) => [
                require('autoprefixer')(),
                require('cssnano')()
              ]
            }
          }
        ]
      },
      {
        test: /\.s?[ac]ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: !isProduction,
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: !isProduction,
              plugins: (loader) => [
                require('autoprefixer')(),
                require('cssnano')()
              ]
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: !isProduction
            }
          },
        ]
      },
      {
        // only include svg that doesn't have font in the path or file name by using negative lookahead
        test: /(\.(png|jpe?g|gif)$|^((?!font).)*\.svg$)/,
        use: [{
          loader: 'url-loader',
          options: {
            limit: 15000, // bytes
            fallback: 'file-loader',
            // file-loader options
            name: '[name]-[hash].[ext]',
            outputPath: 'images/',
            publicPath: '../images'
          }
        }],
      },
      {
        // include fonts svg files only
        test: /(\.(woff2?|ttf|eot|otf)$|font.*\.svg$)/,
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name]-[hash].[ext]',
            outputPath: 'fonts/',
            publicPath: '../fonts'
          }
        }, ],
      }
    ]
  },
  plugins: [
    new CleanWebpackPlugin(['app/dist']),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery',
    }),
    new MiniCssExtractPlugin({
      filename: "css/app.css",
    }),
    new FriendlyErrorsWebpackPlugin(),
  ],
  devtool: isProduction ? false : 'source-map',
  performance: {
    hints: false,
  },
  stats: {
    modules: false,
  },
  bail: isProduction
};

if (isProduction) {
  module.exports.plugins.push(
    new UglifyJsPlugin({
      sourceMap: false,
      uglifyOptions: {
        output: {
          comments: false,
          beautify: false
        },
        compress: {
          dead_code: true,
          warnings: false,
          drop_debugger: true,
          drop_console: true
        }
      }
    }),
  )
}