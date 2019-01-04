import React from "react";
import App from "app";

export default class ViewTechnologyHorizontal extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Centros de Usinagem Horizontais</h2>
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
                        <td>Heller</td>
                        <td>MCH-460</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 2000, 1400, 1250 mm</li>
                                <li>Capacidade do magazine: 50 ferramentas</li>
                                <li>Carga máxima admissível: 2500 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Wotan</td>
                        <td>Rapid-0</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 2000, 970, 1250 mm</li>
                                <li>Capacidade do magazine: 60 ferramentas</li>
                                <li>Carga máxima admissível: 3000 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Heller</td>
                        <td>MCH-250</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 800, 800, 800 mm</li>
                                <li>Capacidade do magazine: 50 ferramentas</li>
                                <li>Carga máxima admissível: 800 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Heller</td>
                        <td>BEA-2</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 800, 630, 630 mm</li>
                                <li>Capacidade do magazine: 40 ferramentas</li>
                                <li>Carga máxima admissível: 800 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Heller</td>
                        <td>BZH-07</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 630, 500, 560 mm</li>
                                <li>Capacidade do magazine: 48 ferramentas</li>
                                <li>Carga máxima admissível: 300 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Heller</td>
                        <td>MCA-H-150</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 630, 500, 560 mm</li>
                                <li>Capacidade do magazine: 48 ferramentas</li>
                                <li>Carga máxima admissível: 300 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Toyoda</td>
                        <td>FH630SX</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 1000, 800, 850 mm</li>
                                <li>Capacidade do magazine: 60 ferramentas</li>
                                <li>Carga máxima admissível: 1200 kg</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}