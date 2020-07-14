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
                <div className="column has-text-centered">
                    <figure className="image is-128x128">
                        <img src="/img/certificates/IATF-16949-CERTIFIED-positive-RGB.jpg" alt="IATF 16949" title="IATF 16949" />
                    </figure>
                    <p>
                        <a href="/img/certificates/pdf/00005825-001-16949-ENGUS.pdf" target="_blank">English</a> | <a href="/img/certificates/pdf/00005825-001-16949-PORBR.pdf" target="_blank">Português</a>
                    </p>
                </div>
                <div className="column has-text-centered">
                    <figure className="image is-128x128">
                        <img src="/img/certificates/ISO-9001-positive-screen-RGB.jpg" alt="ISO 9001" title="ISO 9001" />
                    </figure>
                    <p>
                        <a href="/img/certificates/pdf/0010508-999-QMS-ENGUS-UKAS.pdf" target="_blank">English</a> | <a href="/img/certificates/pdf/0010508-999-QMS-PORBR-UKAS.pdf" target="_blank">Português</a>
                    </p>
                </div>
                <div className="column has-text-centered">
                    <figure className="image is-128x128">
                        <img src="/img/certificates/ISO-14001-positive-screen-RGB.jpg" alt="ISO 14001" title="ISO 14001" />
                    </figure>
                    <p>
                        <a href="/img/certificates/pdf/Certificado-ISO-14001-ING.pdf" target="_blank">English</a> | <a href="/img/certificates/pdf/Certificado-ISO-14001-PT-BR.pdf" target="_blank">Português</a>
                    </p>
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