const path = require('path');

module.exports = {
    mode: 'development',
    entry: {
        home: './src/index3.js',
        home2: './src/index2.js'
    },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist')
    },
    
};