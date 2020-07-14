const path = require("path");
// const webpack = require("webpack");
const HTMLWebpackPlugin = require("html-webpack-plugin");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: "./src/index.js",
    output: {
        path: path.resolve(__dirname, "dist/"),
        filename: "index.js"
    },
    module: {
        rules: [
            {
                test: /\.(jsx|js)$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader"
                }
            },
            {
                test: /\.(css|scss|sass)$/,
                include: [
                    path.resolve(__dirname, "src")
                ],
                exclude: /node_modules/,
                loader: ["style-loader", "css-loader", "sass-loader"]
            },
            {
                test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
                loader: ["file-loader"]
            },
            {
                test: /\.(jpeg|jpg|gif|png|svg)(\?.*$|$)/,
                loader: ["file-loader?name=/img/[name].[ext]"]
            }
        ]
    },
    resolve: {
        modules: [
            "node_modules",
            path.resolve("src")
        ],
        extensions: [".js", ".jsx", ".scss", ".css"]
    },
    performance: {
        hints: "warning",
        maxAssetSize: 700000,
        maxEntrypointSize: 700000,
        assetFilter: function (assetFilename) {
            return assetFilename.endsWith(".css") || assetFilename.endsWith(".js");
        }
    },
    optimization: {
        splitChunks: {
            cacheGroups: {
                commons: {
                    name: "commons",
                    chunks: "initial",
                    minChunks: 2
                }
            }
        }
    },
    target: "web",
    // stats: "detailed",
    plugins: [
        // new webpack.DefinePlugin({
        //     "process.env": {
        //         MAP_ACCESS_KEY: JSON.stringify(process.env.MAP_ACCESS_KEY)
        //     }
        // }),
        new UglifyJsPlugin(),
        new HTMLWebpackPlugin({
            title: "Kondor - Empresa de Usinagem e Tecnologia em Mecânica",
            author: "Visual Works",
            description: "A Indústria Mecânica Kondor atua no mercado há mais de 40 anos, prestando serviços de usinagem de alta-precisão destinadas à montadoras de veículos pesados, como tratores, caminhões e implementos agrícolas, bem como o setor automotivo e usinagem em geral. Com sede própria localizada na cidade de Itaquaquecetuba-SP, possui uma área de aproximadamente 9.000m2, especialmente projetada.",
            url: "https://www.kondor.com.br",
            image: "https://www.kondor.com.br/img/logo-kondor.jpg",
            filename: path.resolve(__dirname, "dist/index.html"),
            template: path.resolve(__dirname, "src/index.html")
        }),
        new CopyWebpackPlugin(
            {
                patterns: [
                    {
                        from: path.resolve(__dirname, "src/img"),
                        to: path.resolve(__dirname, "dist/img")
                    },
                    {
                        from: path.resolve(__dirname, "src/fonts"),
                        to: path.resolve(__dirname, "dist/fonts")
                    }
                ]
            }
        )
    ],
    // advanced
    parallelism: 2,
    profile: true,
    cache: false
};