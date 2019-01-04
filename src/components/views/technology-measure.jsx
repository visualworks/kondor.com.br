import React from "react";
import App from "app";

export default class ViewTechnologyMeasure extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Equipamentos de Medição</h2>
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
                        <td>Mitutoyo</td>
                        <td>Tridimensional/ Crysta E-12258</td>
                        <td>
                            <ul>
                                <li>Curso nominal X, Y, Z:1200, 2500, 800mm</li>
                                <li>Carga máxima admissível: 2000 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Mitutoyo</td>
                        <td>Tridimensional/ BRM-507</td>
                        <td>
                            <ul>
                                <li>Curso nominal X, Y, Z: 500, 700, 400 mm</li>
                                <li>Carga máxima admissível: 160 kg</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Mitutoyo</td>
                        <td>Rugosímetro/ SJ-301</td>
                        <td>
                            <ul>
                                <li>N.A.</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Mitutoyo</td>
                        <td>O Contracer CV-1000</td>
                        <td>
                            <ul>
                                <li>N.A.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}