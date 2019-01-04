import React from "react";
import App from "app";

export default class ViewTechnologyVertical extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Centros de Usinagem Verticais</h2>
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
                        <td>Haas</td>
                        <td>VF-3</td>
                        <td>
                            <ul>
                                <li>Cursos X,Y,Z: 1016,508,635 mm</li>
                                <li>Capacidade do magazine: 20 ferramentas</li>
                                <li>Carga máxima admissível: 1.588 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Romi</td>
                        <td>Discovery 760</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 762, 406, 508 mm</li>
                                <li>Capacidade do magazine: 22 ferramentas</li>
                                <li>Carga máxima admissível: 900 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Toyoda</td>
                        <td>FV1365S</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 1300, 650, 600 mm</li>
                                <li>Capacidade do magazine: 32 ferramentas</li>
                                <li>Carga máxima admissível: 1300 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>ESPEED</td>
                        <td>V-1060</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 1000, 600, 600 mm</li>
                                <li>Capacidade do magazine: 16 ferramentas</li>
                                <li>Carga máxima admissível: 800 kg</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}