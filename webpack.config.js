const HtmlWebpackPlugin = require('html-webpack-plugin'); // Require  html-webpack-plugin plugin
const path = require('path');

module.exports = {
    mode: 'development',
    entry: __dirname + "/src/app/index.js", // webpack entry point. Module to start building dependency graph
    output: {
        path: __dirname + '/dist', // Folder to store generated bundle
        filename: 'bundle.js',  // Name of generated bundle after build
        publicPath: '/' // public URL of the output directory when referenced in a browser
    },
    module: {  // where we defined file patterns and their loaders
        rules: [
            {
                test: /\.js$/,
                use: 'babel-loader',
                exclude: [
                    /node_modules/
                ]
            },
            {
                test: /\.(sass|scss|css)$/,
                use: [{
                    loader: "style-loader" // creates style nodes from JS strings
                }, {
                    loader: "css-loader" // translates CSS into CommonJS
                }, {
                    loader: "sass-loader" // compiles Sass to CSS
                }]
            },
            {
                test: /\.(png|svg|jpg|gif|ttf)$/,
                use: [
                'file-loader',
                ],
            },
        ]
    },
    plugins: [  // Array of plugins to apply to build chunk
        new HtmlWebpackPlugin({
            template: __dirname + "/src/public/index.html",
            inject: 'body'
        })
    ],
    devServer: {  // configuration for webpack-dev-server
        contentBase: './src/public',  //source of static assets
        port: 3000, // port to run dev-server
    },
    resolve: {
        alias: {
            "@images": path.resolve(__dirname, 'src/public/assets/images'),
            "@plugins": path.resolve(__dirname, 'src/app/plugins'),
            "@fonts": path.resolve(__dirname, 'src/public/assets/fonts'),
        }
    }
};
