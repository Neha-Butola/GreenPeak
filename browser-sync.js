// https://browsersync.io/docs/options

module.exports = {
  server: {
    baseDir: './app',
    index: 'index.html',
    directory: true,
  },
  files: [
    './app/dist/**/*.css',
    // don't refresh on js changes
    '!./app/dist/**/*.js',
    './app/**/*.html',
  ],
  notify: false,
  injectChanges: true,
  online: true,
  reloadOnRestart: true,
  logFileChanges: true,
  ghostMode: false,
  logLevel: "warn"
};
