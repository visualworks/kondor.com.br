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
                    <figure className="image is-square">
                        <img src="/img/certificates/certificate-IATF-16949-2016.jpg" alt="IATF 16949" title="IATF 16949" />
                    </figure>
                    <p>
                        <a href="/img/certificates/pdf/00005825-001-16949-ENGUS-IATF.pdf" target="_blank">English</a>
                        &nbsp;|&nbsp;
                        <a href="/img/certificates/pdf/00005825-001-16949-PORBR-IATF.pdf" target="_blank">Português</a>
                    </p>
                </div>
                {/*<div className="column has-text-centered">*/}
                {/*    <figure className="image is-128x128">*/}
                {/*        <img src="/img/certificates/ISO-9001-positive-screen-RGB.jpg" alt="ISO 9001" title="ISO 9001" />*/}
                {/*    </figure>*/}
                {/*    <p>*/}
                {/*        <a href="/img/certificates/pdf/0010508-999-QMS-ENGUS-UKAS.pdf" target="_blank">English</a> | <a href="/img/certificates/pdf/0010508-999-QMS-PORBR-UKAS.pdf" target="_blank">Português</a>*/}
                {/*    </p>*/}
                {/*</div>*/}
                <div className="column has-text-centered">
                    <figure className="image is-square">
                        <img src="/img/certificates/ISO-14001-positive-screen-RGB.jpg" alt="ISO 14001" title="ISO 14001" />
                    </figure>
                    <p>
                        <a href="/img/certificates/pdf/00008762-EMS-ENGUS-UKAS.pdf" target="_blank">English</a> | <a href="/img/certificates/pdf/00008762-EMS-PORBR-UKAS.pdf" target="_blank">Português</a>
                    </p>
                </div>
            </div>
            <h2 className="title">Certificações</h2>
            <p>Estamos orgulhosos que a Kondor se certificou nas principais normas da qualidade, isto evidencia que não zela apenas pela qualidade de seus produtos, mas zela também pelo cumprimento de regulamentos, legislações e os requisitos do cliente. E, demonstra que a gestão da qualidade não é apenas a aplicação de regras novas em sua cadeia produtiva, mas o empenho de construir uma nova cultura organizacional e melhorá-la continuamente, envolvendo a alta administração, colaboradores, fornecedores e cliente. Toda essa nova estrutura obtida por meio das certificações tem como principal objetivo a satisfação do cliente.</p>
            <p>A certificação na norma ISO 14001 é outro ponto de orgulho, pois demonstra aprovação às diversas ações realizadas no dia a dia com o intuito de proteger o meio ambiente, ou seja, impossibilitar que os aspectos ambientais tornem-se impactos ambientais.</p>
            <hr />
            <h2 className="title">Política Integrada - Qualidade e Meio Ambiente</h2>
            <p>A <strong>Indústria Mecânica Kondor Ltda.</strong> atua no fornecimento de peças acabadas e prestação de serviços de usinagem de alta precisão destinadas às montadoras de veículos pesados, ao setor automotivo e outros.</p>
            <p>Declara seu comprometimento com o meio ambiente e satisfação dos seus clientes por meio de:</p>
            <ul>
                <li>Proteção ao meio ambiente: prevenindo a poluição, atendendo à legislação e às outras partes interessadas, e reduzindo o consumo dos recursos naturais;</li>
                <li>Atendimento aos requisitos da qualidade, serviços fornecidos e prazos de entrega dos produtos;</li>
                <li>Melhoria contínua do sistema de gestão integrado;</li>
                <li>Treinamento de seus funcionários em todos os níveis hierárquicos.</li>
            </ul>
            <p>Kazunari Okimasu<br />Presidente</p>
        </div>;
        return (content);
    }
}