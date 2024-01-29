<?php
    class Evento{
        private int $id = 0;
        private ?string $descrizione = "";
        private ?Date $dataInizio = null;
        private ?Date $dataFine = null;
        private int $tariffa = 0;


        public function __construct(int $id, ?string $descrizione, ?Date $dataInizio, ?Date $dateFine, int $tariffa) {
            $this->id = $id;
            $this->descrizione = $descrizione;
            $this->dataInizio = $dataInizio;
            $this->dataFine = $dateFine;
            $this->tariffa = $tariffa;
        }
        public function getid(){
            return $this->id;
        }
        public function toHtml(){
            return "
            <tr>
                <td>
                    ".$this->id."
                </td>
            </tr>
            ";
        }
    }


?>