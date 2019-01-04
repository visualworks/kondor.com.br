import React from "react";
import App from "app";

export default class ViewTechnologyTeeth extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = (<div className="content">
            <h2 className="title">Escateladora de Dentes</h2>
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
                        <td>Yichang</td>
                        <td>CJMT/2011</td>
                        <td>
                            <ul>
                                <li>Máximo diâmetro da peça: – externo: 500mm; – interno: 600mm; – módulo máximo 10</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>);
        return content;
    }
}