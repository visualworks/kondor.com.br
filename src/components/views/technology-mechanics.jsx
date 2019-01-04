import React from "react";
import App from "app";

export default class ViewTechnologyMechanics extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Tornos Mecânicos</h2>
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
                        <td>01</td>
                        <td>MetalExport Warszawa</td>
                        <td>KNA 135/110 (Vertical)</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 950 mm</li>
                                <li>Comprimento máximo torneável: 570 mm</li>
                                <li>Carga máxima admissível: 3000 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Officine Meccaniche e Fonderie-SE</td>
                        <td>1100 (Vertical)</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 800 mm</li>
                                <li>Comprimento máximo torneável: 500 mm</li>
                                <li>Carga máxima admissível: 1500 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Bullard</td>
                        <td>24 (USA) (Vertical)</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 500 mm</li>
                                <li>Comprimento máximo torneável: 400 mm</li>
                                <li>Carga máxima admissível: 300 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Romi</td>
                        <td>E-45</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 400 mm</li>
                                <li>Comprimento máximo torneável: 1000 mm</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Imor</td>
                        <td>MIN</td>
                        <td>
                            <ul>
                                <li>Diâmetro máximo torneável: 250 mm</li>
                                <li>Comprimento máximo torneável: 1000 mm</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}