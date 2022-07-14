<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

// classe che rappresenta un film
class Movie
{
    public $titolo;
    public $anno;
    public $immagine;
    public $testo;

    /**
     * Get the value of titolo
     */ 
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set the value of titolo
     *
     * @return  self
     */ 
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get the value of anno
     */ 
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set the value of anno
     *
     * @return  self
     */ 
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get the value of immagine
     */ 
    public function getImmagine()
    {
        return $this->immagine;
    }

    /**
     * Set the value of immagine
     *
     * @return  self
     */ 
    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;

        return $this;
    }

    /**
     * Get the value of testo
     */ 
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set the value of testo
     *
     * @return  self
     */ 
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }
}


$movie1 = new Movie();
$movie1->titolo = "Ritorno al futuro";
$movie1->anno = "1985";
$movie1->immagine = "https://cinemanuovo.it/ritorno-al-futuro-drivein/";
$movie1->testo = "Ritorno al Futuro è un film di genere avventura, commedia, fantascienza del 1985,
diretto da Robert Zemeckis, con Michael J. Fox e Christopher Lloyd. Uscita al cinema il 18 ottobre 1985.
Durata 116 minuti. Distribuito da Uip (1985), Cic Video Laserdisc, RCS Film & TV, Philips Video Classics,
Dvd Universal (2002).";

var_dump($movie1);


$movie2 = new Movie();
$movie2->titolo = "L'odio";
$movie2->anno = "1995";
$movie2->immagine = "https://www.mymovies.it/film/1995/lodio/";
$movie2->testo = "L'odio è un film di genere drammatico del 1995, diretto da Mathieu Kassovitz, con Vincent
Cassel e Saïd Taghmaoui. Durata 95 minuti. Distribuito da Mikado Film - Mondatori Video, L'unità Video.";

var_dump($movie2);
