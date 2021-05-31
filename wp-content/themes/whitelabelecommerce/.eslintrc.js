module.exports = {
  parser: 'babel-eslint',
  extends: ['prettier'],
  plugins: ['prettier'],
  globals: {
    wp: true
  },
  env: {
    browser: true
  },
  settings: {
    react: {
      version: 'detect'
    }
  },
  rules: {
    // Prevent warnings for webpack resolve aliases.
    'import/no-unresolved': 'off',
    // Prevent warnings for webpack extension resolution.
    'import/extensions': 'off',
    // Prevent warnings for import statements with aliases.
    'import/first': 'off',
    'space-before-function-paren': [
      'error',
      {
        anonymous: 'never',
        named: 'never',
        asyncArrow: 'always'
      }
    ]
  }
}
