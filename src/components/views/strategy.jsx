import React from "react";
import App from "app";

export default class ViewStrategy extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const view = (
            <div className="content">
                <h2 className="title">Plano Estratégico</h2>
                <p>Nossa estratégia inclui uma visão em que:</p>
                <ul>
                    <li>A Kondor seja reconhecida como a melhor empresa do segmento em âmbito mundial, preservando, sobre tudo, uma exemplar dignidade ética na condução dos negócios;</li>
                    <li>Atendimento aos requisitos da qualidade, serviços fornecidos e prazos de entrega dos produtos;</li>
                    <li>Treinamento de seus colaboradores em todos os níveis hierárquicos;</li>
                    <li>Melhoria continua dos processos do sistema de gestão;</li>
                    <li>Redução da utilização dos recursos naturais;</li>
                    <li>Preservação do meio ambiente, respeitando a legislação, as outras partes interessadas e evitando a poluição.</li>
                </ul>
            </div>
        );
        return view;

    }
}