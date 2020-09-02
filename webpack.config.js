const HtmlWebpackPlugin = require('html-webpack-plugin');
const path = require('path');

module.exports = {
    mode: 'development',
    entry: __dirname + "/src/app/index.js",
    output: {
        path: __dirname + '/dist',
        filename: 'bundle.js',
        publicPath: '/'
    },
    module: {
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
                    loader: "style-loader"
                }, {
                    loader: "css-loader"
                }, {
                    loader: "sass-loader"
                }]
            },
            {
                test: /\.(png|svg|jpg|gif|ttf)$/,
                use: [
                'file-loader',
                ],
            },
            {
                test: /\.(html)$/,
                use: {
                    loader: 'html-loader',
                    options: {
                        // attributes: ['img:src', 'link:href']
                    }
                }
            }
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
            "@components": path.resolve(__dirname, 'src/app/scripts/components'),
            "@images": path.resolve(__dirname, 'src/public/assets/images'),
            "@plugins": path.resolve(__dirname, 'src/app/plugins'),
            "@fonts": path.resolve(__dirname, 'src/public/assets/fonts'),
        }
    }
};
