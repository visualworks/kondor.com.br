import React from "react";
import App from "app";

export default class ViewTechnologyCnc extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Tornos CNC</h2>
            <table className="table is-bordered is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th><abbr title="Quantidade">Qtde</abbr></th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Principais Características</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>02</td>
                        <td>Hwacheon</td>
                        <td>VT-550 (Vertical)</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 650 mm</li>
                                <li>Comprimento máximo torneável: 700 mm</li>
                                <li>Carga máxima admissível: 355 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Romi</td>
                        <td>Centur 40RV</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 350 mm</li>
                                <li>Comprimento máximo torneável: 1000 mm</li>
                                <li>Torre: 4 posições</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Romi-Mazak</td>
                        <td>Cosmos 30U</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 320 mm</li>
                                <li>Comprimento máximo torneável: 1000 mm</li>
                                <li>Torre: 16 posições</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Hyundai-Kia Machine</td>
                        <td>SKT 21</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 350 mm</li>
                                <li>Comprimento máximo torneável: 410 mm</li>
                                <li>Torre: 12 posições</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Mazak</td>
                        <td>QTN 150 II</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 330 mm</li>
                                <li>Comprimento máximo torneável: 517 mm</li>
                                <li>Torre: 8 posições</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Index</td>
                        <td>GU800</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 540 mm</li>
                                <li>Comprimento máximo torneável: 820 mm</li>
                                <li>Torre: 8 posições</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}