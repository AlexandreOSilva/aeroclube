@extends('layout.master')
@section('title', 'Aero Clube de Leiria - FAQs')

@section('content')
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ's</title>
  <link rel="stylesheet" href={{asset("https://www.w3schools.com/w3css/4/w3.css")}}>
  <link rel="stylesheet" href={{asset("https://fonts.googleapis.com/css?family=Raleway")}}>
  <link rel="stylesheet" href={{asset("https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css")}}>
  <link rel="stylesheet" href={{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}>
  <link rel="stylesheet" href="FAQs.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <p id="faqs">
        FAQ's
    </p>
    <p id="sub">Aqui podem ser esclarecidas algumas das dúvidas mais comuns!</p>
    <section>
        <div class="block">
            <div class="questions">
                <div class="question" id="question1">
                    <a class="question-link" href="#question1">
                        Quais os requisitos para a incrição no curso PPL(A)?
                        <ion-icon name="add-outline" class="ion-md-add"></ion-icon>
                    </a>
                    <div class="answer">
                        <p>
                            Para se increver no curso PPL(A) é preciso ser sócio ativo, ter idade mínima de 17 anos no
                            momento de inscrição e frequência do curso, pelo menos 18 anos para se propor ao exame final
                            prático, escolaridade mínima obrigatória, certificado médico EASA Classe 2 ou superior e ter
                            regularizado o pagamento da pré-inscrição.
                        </p>
                    </div>
                </div>
                <div class="question" id="question2">
                    <a class="question-link" href="#question2">
                        Quais os serviços que têm disponíveis?
                        <ion-icon name="add-outline" class="ion-md-add"></ion-icon>
                    </a>
                    <div class="answer">
                        <p>
                            Com o Aeroclube de Leiria tem os seguintes serviços: Programa Piloto por um dia, Batismos de
                            voo, Voos
                            panorâmicos, Simulador de voo, Hangaragem bem como outros serviços que serão
                            disponibilizados brevemente.
                        </p>
                    </div>
                </div>
                <div class="question" id="question3">
                    <a class="question-link" href="#question3">
                        Como me posso tornar sócio?
                        <ion-icon name="add-outline" class="ion-md-add"></ion-icon>
                    </a>
                    <div class="answer">
                        <p>
                            Qualquer pessoa pode tornar-se sócio do Aero Clube de Leiria. Basta que nos remeta a
                            proposta de sócio (disponível no nosso site) preenchida com os seus dados e tipo de adesão
                            pretendida. Apos receção da
                            proposta e avaliação interna da mesma, será contactado pelos nossos serviços afim de
                            formalizar o processo de adesão.
                        </p>
                    </div>
                </div>
                <div class="question" id="question4">
                    <a class="question-link" href="#question4">
                        É possível fazer a revalidação de qualificações?
                        <ion-icon name="add-outline" class="ion-md-add"></ion-icon>
                    </a>
                    <div class="answer">
                        <p>
                            Sim. No Aero Clube de Leiria é possível fazer a revalidação de qualificações, bem como a
                            renovação de qualificações e o curso de refrescamento. Tudo o que precisa temos no nosso
                            Aero Clube!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
@endsection
