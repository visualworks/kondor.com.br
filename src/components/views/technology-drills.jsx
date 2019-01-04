import React from "react";
import App from "app";

export default class ViewTechnologyDrills extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Furadeiras</h2>
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
                        <td>Caser</td>
                        <td>35-1600</td>
                        <td>
                            <ul>
                                <li>Furadeira radial</li>
                                <li>Raio de perfuração máximo: 1600 mm</li>
                                <li>Cone de eixo porta broca morse n° 4</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Kone</td>
                        <td>KR-40</td>
                        <td>
                            <ul>
                                <li>Furadeira radial</li>
                                <li>Raio de perfuração máximo: 1200 mm</li>
                                <li>Cone de eixo porta broca morse n° 4</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Invema</td>
                        <td>FRB</td>
                        <td>
                            <ul>
                                <li>Furadeira radial</li>
                                <li>Raio de perfuração máximo: 1250 mm</li>
                                <li>Cone de eixo porta broca morse n° 4</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Csepel</td>
                        <td>RF50/1250</td>
                        <td>
                            <ul>
                                <li>Furadeira radial</li>
                                <li>Raio de perfuração máximo: 1250 mm</li>
                                <li>Cone de eixo porta broca morse n° 4</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Sanches Blanes</td>
                        <td>FR25</td>
                        <td>
                            <ul>
                                <li>Furadeira radial</li>
                                <li>Raio de perfuração máximo: 900 mm</li>
                                <li>Cone de eixo porta broca morse n° 3</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Otto Müller</td>
                        <td>TRCA</td>
                        <td>
                            <ul>
                                <li>Furadeira radial</li>
                                <li>Raio de perfuração máximo: 1000 mm</li>
                                <li>Cone de eixo porta broca morse n° 2</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Yadoya</td>
                        <td>FYS-32</td>
                        <td>
                            <ul>
                                <li>Furadeira de coluna</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Yadoya</td>
                        <td>FY-38</td>
                        <td>
                            <ul>
                                <li>Furadeira de coluna</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>WMW</td>
                        <td>BT-10</td>
                        <td>
                            <ul>
                                <li>Furadeira de bancada</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}