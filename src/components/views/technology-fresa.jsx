import React from "react";
import App from "app";

export default class ViewTechnologyFresa extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Fresadoras</h2>
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
                        <td>Correa</td>
                        <td>F4-UE</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 1300, 350, 500 mm</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Beavermill</td>
                        <td>MK2</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 900, 450, 450 mm</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Reinhard Bohle</td>
                        <td>FVA 300</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 900, 350, 450 mm</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Oerlikon</td>
                        <td>M08V</td>
                        <td>
                            <ul>
                                <li>Cursos X, Y, Z: 800, 350, 400 mm</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}