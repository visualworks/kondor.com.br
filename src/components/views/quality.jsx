import React from "react";
import App from "app";

export default class ViewProducts extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const content = <div className="content">
            <h2 className="title">Qualidade</h2>
            <p>A KONDOR tem difundido a consciência ambiental e noções de que legislações e normas devem ser rigorosamente cumpridas para minimizar e evitar impactos e reações de degradação ao meio ambiente, que poderiam ser provocadas por atividades industriais. Continuaremos sempre nessa busca pois acreditamos num futuro melhor para as futuras gerações. Busca pela qualidade, atender necessidades e satisfazer o cliente significa fabricar produtos que respondam e superem quaisquer expectativas. Para a KONDOR é indispensável dispor de processos confiáveis, previsíveis e guiados por boas práticas gerenciais, garantindo assim um ótimo nível de excelência. Nesse sentido a KONDOR está sempre em busca de atualização por processos de melhoria e qualidade.</p>
            <div className="columns certificates">
                <div className="column">
                    <figure className="image is-128x128">
                        <img src="/img/certificate-ISO-TS-16949-LRQA-min.jpg" alt="ISO/TS 16949 LRQA" title="ISO/TS 16949 LRQA" />
                    </figure>
                </div>
                <div className="column">
                    <figure className="image is-128x128">
                        <a href="/img/certificate-kondor-iso-ts.png" target="_blank"><img src="/img/certificate-kondor-iso-ts.png" alt="ISO/TS 16949 LRQA" title="ISO/TS 16949 LRQA" /></a>
                    </figure>
                </div>
                <div className="column">
                    <figure className="image is-128x128">
                        <img src="/img/certificate-ISO9001-LRQA-min.jpg" alt="ISO 9001 LRQA" title="ISO 9001 LRQA" />
                    </figure>
                </div>
                <div className="column">
                    <figure className="image is-128x128">
                        <a href="/img/certificate-kondor-iso-9001.png" target="_blank"><img src="/img/certificate-kondor-iso-9001.png" alt="ISO 14001 LRQA" title="ISO 14001 LRQA" /></a>
                    </figure>
                </div>
                <div className="column">
                    <figure className="image is-128x128">
                        <img src="/img/certificate-ISO14001-LRQA-min.jpg" alt="ISO 14001 LRQA" title="ISO 14001 LRQA" />
                    </figure>
                </div>
                <div className="column">
                    <figure className="image is-128x128">
                        <a href="/img/certificate-kondor-iso-14001.jpg" target="_blank"><img src="/img/certificate-kondor-iso-14001.jpg" alt="ISO 9001 LRQA" title="ISO 9001 LRQA" /></a>
                    </figure>
                </div>
            </div>
            <h2 className="title">Certificações</h2>
            <p>Estamos orgulhosos com os resultados! A KONDOR tem difundido a consciência ambiental e noções de que legislações e normas devem ser rigorosamente cumpridas para minimizar e evitar impactos e reações de degradação ao meio ambiente, que poderiam ser provocadas por atividades industriais. Continuaremos sempre nessa busca pois acreditamos num futuro melhor para as futuras gerações. Busca pela qualidade, atender necessidades e satisfazer o cliente significa fabricar produtos que respondam e superem quaisquer expectativas. Para a KONDOR é indispensável dispor de processos confiáveis, previsíveis e guiados por boas práticas gerenciais, garantindo assim um ótimo nível de excelência. Nesse sentido a KONDOR está sempre em busca de atualização por processos de melhoria e qualidade.</p>
            <p>A Kondor está em processo de certificação da nova versão da ISO 14001:2015 com o escopo “Prestação de Serviços de Usinagem e Fabricação de Peças para a Indústria Automotiva e Mecânica em Geral”, com previsão para Março/2017.</p>
            <hr />
            <h2 className="title">Política Integrada - Qualidade e Meio Ambiente</h2>
            <p>A INDÚSTRIA MECÂNICA KONDOR LTDA. atua no fornecimento de peças acabadas e prestação de serviços de usinagem de alta precisão destinadas às montadoras de veículos pesados, ao setor automotivo e outros.</p>
            <p>Declara seu comprometimento com o Meio Ambiente, atendimento aos requisitos e satisfação dos seus clientes, por meio de:</p>
            <ul>
                <li>Atendimento aos requisitos da qualidade, serviços fornecidos e prazos de entrega dos produtos;</li>
                <li>Treinamento de seus colaboradores em todos os níveis hierárquicos;</li>
                <li>Melhoria contínua dos processos do sistema de gestão;</li>
                <li>Redução da utilização dos recursos naturais;</li>
                <li>Preservação do meio ambiente – respeitando a legislação, as outras partes interessadas e evitando a poluição.</li>
            </ul>
            <p>Kazunari Okimasu<br />Presidente</p>
        </div>;
        return (content);
    }
}