import React from "react";
import App from "app";

export default class ViewVisitors extends App {
    constructor(props) {
        super(props);
    }
    render() {
        const view = (<div className="content">
            <h2 className="title">Guia do Visitante</h2>
            <p>Desenvolvimento sustentado é um desafio, ao mesmo tempo, a necessidade latente de todas as organizações que desejam permanecer no mercado. A direção da KONDOR resolveu abraçar esta idéia ao mudar suas novas instalações para Itaquaquecetuba. O sonho de ter uma área maior, suficiente para expandir sua capacidade produtiva e melhor atender a seus clientes, veio aliado à vontade de contribuir para uma natureza mais limpa e sustentável. A partir daí os quatro verbos que embasam a gestão ambiental, adquiriram mais força e um novo sentido, passando a ser conjugados pela KONDOR a cada novo negócio ou idéia de expansão em relação aos efluentes e resíduos:</p>
            <div className="has-text-centered">
                <h3 className="subtitle">
                    <strong>Evitar</strong> / <strong>Reduzir</strong> / <strong>Reusar</strong> / <strong>Reciclar</strong>
                </h3>
            </div>
            <p><strong>ISO 14001</strong></p>
            <p>Com a implantação de um sistema de gestão ambiental, em conformidade com a norma ISO 14001, a empresa tem difundido por todos os colaboradores, além da consciência ambiental, a noção de que a legislação e as normas devem ser cumpridas, para minimizar e evitar os impactos ao meio ambiente, que poderiam vir a ocorrer em função das atividades da empresa. Isso tem sido alcançado por meio de treinamentos constantes e da prática diária. Ao elaborar seu sistema de gestão ambiental, a KONDOR optou por integrá-lo ao sistema de gestão da qualidade já existente, formando assim um sistema de gestão integrado, mais conhecido pela sigla “SGI”.</p>
            <p><strong>Coleta Seletiva</strong></p>
            <p>Separando o lixo você ajuda a preservar a natureza e a melhorar a nossa qualidade de vida e de futuras gerações, através de processos que evitam a retirada de recursos naturais para a fabricação de novos produtos. Lembre-se que preservar o meio ambiente é responsabilidade de todos nós!</p>
            <p><strong>Limpeza e Segurança</strong></p>
            <p>Seguem abaixo orientações para que sua visita à <strong>KONDOR</strong> seja mais segura e agradável:</p>
            <ul>
                <li>Respeite a limpeza e organização das instalações;</li>
                <li>Informe sempre na portaria se estiver entrando com objetos específicos, tais como: ferramentais, equipamentos, notebook, etc;</li>
                <li>Em áreas sinalizadas é obrigatório o uso dos equipamentos de proteção individual;, retire seu kit no departamento de recursos humanos;</li>
                <li>A utilização de máquina fotográfica e filmadora, inclusive de celulares, só será permitida com prévia autorização;</li>
                <li>É proibido circular e permanecer nas instalações da KONDOR sem estar autorizado ou acompanhado pelo visitado.</li>
            </ul>
        </div>);
        return view;

    }
}