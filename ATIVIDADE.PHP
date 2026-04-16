<?php

while (true) {

    echo "1 - Objetivos da PSI\n";
    echo "2 - Escopo da política\n";
    echo "3 - Responsabilidades\n";
    echo "4 - Boas práticas de segurança\n";
    echo "5 - Consequências do descumprimento\n";
    echo "6 - Confidencialidade\n";
    echo "7 - Integridade\n";
    echo "8 - Disponibilidade\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";

    $opcao = (readline());

    if ($opcao == 0) {
        echo "Encerrando o sistema\n";
        break;
    }

    switch ($opcao) {

        case 1:
            echo "OBJETIVOS DA PSI:\n";
            echo " Proteger os ativos de informação: Assegurar a Confidencialidade (acesso apenas a pessoas autorizadas), Integridade (informação correta e não alterada) e Disponibilidade (acesso quando necessário)..\n";
            echo "Reduzir riscos: Prevenir vazamentos de dados, ataques cibernéticos, perda de informações e acessos não autorizados..\n";
            echo "Orientar Comportamentos: Estabelecer padrões de comportamento seguro para colaboradores e terceiros\n";
            break;
        case 2:
            echo "ESCOPO DA POLÍTICA:\n";
            echo "Pessoas: Todos os colaboradores (efetivos, estagiários, aprendizes), gestores, terceiros, fornecedores e parceiros comerciais que utilizam os recursos de TI ou acessam informações da organização\n";
            echo " Ativos: Sistemas de informação, redes, dispositivos móveis, e-mails, documentos impressos e qualquer forma de armazenamento de informação.\n";
            echo "Ambientes: Aplica-se às dependências físicas da empresa e ao trabalho remoto ou externo. \n";
            break;
        case 3:
            echo "RESPONSABILIDADES:\n";
            echo " Área de Segurança da Informação/TI: Desenvolver, implementar e monitorar a política, além de gerenciar os controles de segurança.\n";
            echo "Usuários (Colaboradores): Conhecer, compreender e cumprir as regras estabelecidas na PSI, agindo com zelo no uso dos ativos de informação\n";
            echo "Alta Direção/Gestão: Aprovar a PSI, designar responsáveis pela segurança e prover recursos.\n";
            break;
        case 4:
            echo "BOAS PRÁTICAS:\n";
            echo " Controle de Acesso: Uso de senhas fortes, autenticação de múltiplos fatores (MFA) e acesso baseado na necessidade de saber (princípio do menor privilégio).\n";
            echo "Gestão de Incidentes: Procedimentos claros para relatar vulnerabilidades ou violações de segurança.\n";
            echo " Atualizações de Software: Mantenha o sistema operacional, navegadores e aplicativos (antivírus) sempre atualizados para corrigir vulnerabilidades conhecidas.\n";
            echo " Backup de Dados: Realize backups automáticos e periódicos de arquivos importantes, armazenando-os em locais distintos, como nuvem e dispositivos externos, para proteção contra ransomware\n";
            break;
        case 5:
            echo "CONSEQUÊNCIAS DO DESCUMPRIMENTO:\n";
            echo " Medidas Disciplinares: Advertências verbais ou escritas, suspensão ou rescisão do contrato de trabalho (justa causa)..\n";
            echo " Ações Legais: Processos civis ou criminais, caso o descumprimento gere prejuízos financeiros ou legais à organização..\n";
            echo "Bloqueio de Acesso: Suspensão imediata dos acessos aos sistemas de informação .\n";
            break;
        case 6;
            echo "CONFIDENCIALIDADE:\n";
            echo " Acesso Garantido: Informações e sistemas operacionais prontos para uso em tempo integral ou conforme acordado.\n";
            echo " garantindo que dados e sistemas estejam acessíveis aos usuários autorizados exatamente quando necessári.\n\n";
            break;
        case 7:
            echo "INTEGRIDADE:\n";
            echo " garante que os dados permaneçam precisos, confiáveis e inalterados durante todo o seu ciclo de uso.\n";
            echo " Controle de versões e backups.\n";
            break;
        case 8:
            echo "DISPONIBILIDADE:\n";
            echo " Acesso sob Demanda: Informações e serviços devem estar disponíveis no momento em que os usuários autorizados precisam deles.\n";
            echo " Continuidade de Negócios: Essencial para evitar perdas financeiras e de produtividade causadas por interrupções do sistema.\n";
            break;
        default:
            echo "Opção inválida!\n";
    }
}
