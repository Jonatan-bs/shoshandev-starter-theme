const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = [{
      entry: '/src/js/main.js',

      output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'build/frontend')
      },
      module: {
        rules: [
          {
            test: /\.js$/i,
            exclude: /node_modules/,
            use: {
              loader: 'babel-loader',
            },
          },
          {
            test: /\.scss$/i,
            use: [
              MiniCssExtractPlugin.loader,
              { loader: 'css-loader', options: { importLoaders: 5 } },
              { loader: 'postcss-loader' },
              { loader: 'sass-loader' },
            ],            
          },
        ],
      },
      plugins: [
        new MiniCssExtractPlugin(),
      ]
},{
      entry: '/src/js/editor.js',

      output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'build/gutenberg')
      },
      module: {
        rules: [
          {
            test: /\.js$/i,
            exclude: /node_modules/,
            use: {
              loader: 'babel-loader',
            },
          },
          {
            test: /\.scss$/i,
            use: [
              MiniCssExtractPlugin.loader,
              { loader: 'css-loader', options: { importLoaders: 2 } },
              // { loader: 'postcss-loader' },
              { loader: 'sass-loader' },
            ],        
          },
        ],
      },
      plugins: [
        new MiniCssExtractPlugin(),
      ]
}]
