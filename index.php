<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il "Database" e la visualizzazione di
queste domande e risposte con PHP. -->
<?php
  $questionsAnswer = [
                "qa1" => [

                    "q1" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                    "a1" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa.
                             La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati
                             relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi,i risultati visualizzati devono essere inadeguati,
                             irrilevanti o non più rilevanti, o eccessivi."
                  ],
                "qa2" => [

                  "q2" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                    "a2" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza
                             e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno."
                  ],
                "qa3" => [

                    "q3" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
                    "a3" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web.
                             I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente
                             di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti
                             e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di
                             determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e
                             che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google.
                             In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
                  ]
  ];
  // echo count($questionsAnswer);

?>
        <div style="text-align:center">
          <h2>
            <?php
              $question1 = $questionsAnswer["qa1"]["q1"];
              echo $question1;
             ?>
          </h2>
          <p>
            <?php
              $answer1 = $questionsAnswer["qa1"]["a1"];
              echo $answer1;
             ?>
          </p>
          <h2>
            <?php
              $question2 = $questionsAnswer["qa2"]["q2"];
              echo $question2;
             ?>
          </h2>
          <p>
            <?php
              $answer2 = $questionsAnswer["qa2"]["a2"];
              echo $answer2;
             ?>
          </p>
          <h2>
            <?php
              $question3 = $questionsAnswer["qa3"]["q3"];
              echo $question3;
             ?>
          </h2>
          <p>
            <?php
              $answer3 = $questionsAnswer["qa3"]["a3"];
              echo $answer3;
             ?>
          </p>

        </div>
<!-- $db = [
  //       'teachers' => [
  //           [
  //               'name' => 'Michele',
  //               'lastname' => 'Papagni'
  //           ],
  //           [
  //               'name' => 'Fabio',
  //               'lastname' => 'Forghieri'
  //           ]
  //           ],
  //       'pm' => [
  //           [
  //               'name' => 'Roberto',
  //               'lastname' => 'Marazzini'
  //           ],
  //           [
  //               'name' => 'Federico',
  //               'lastname' => 'Pellegrini'
  //           ]
  //       ]
  //   ]; -->
