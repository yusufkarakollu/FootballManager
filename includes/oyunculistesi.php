<?php
include "./head.php"
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <h4>Player Search</h4>
      <div>
        <select class="dropdownMenu rounded ms-2 mt-3" style="background-color: crimson; height:38px; width:296px;" aria-label="Default select example">
          <option selected class="fw-bold" style="color: white;">Position</option>
          <option value="LW" class="fw-bold" style="color: white;">LW</option>
          <option value="ST" class="fw-bold" style="color: white;">ST</option>
          <option value="RW" class="fw-bold" style="color: white;">RW</option>
          <option value="LF" class="fw-bold" style="color: white;">LF</option>
          <option value="CF" class="fw-bold" style="color: white;">CF</option>
          <option value="RF" class="fw-bold" style="color: white;">RF</option>
          <option value="CAM" class="fw-bold" style="color: white;">CAM</option>
          <option value="LM" class="fw-bold" style="color: white;">LM</option>
          <option value="CM" class="fw-bold" style="color: white;">CM</option>
          <option value="RM" class="fw-bold" style="color: white;">RM</option>
          <option value="CDM" class="fw-bold" style="color: white;">CDM</option>
          <option value="LWB" class="fw-bold" style="color: white;">LWB</option>
          <option value="LB" class="fw-bold" style="color: white;">LB</option>
          <option value="CB" class="fw-bold" style="color: white;">CB</option>
          <option value="RB" class="fw-bold" style="color: white;">RB</option>
          <option value="RWB" class="fw-bold" style="color: white;">RWB</option>
          <option value="GK" class="fw-bold" style="color: white;">GK</option>
        </select>
      </div>
      <div>
        <select class="dropdownMenu rounded ms-2 mt-3" style="background-color: crimson; height:38px; width:296px;" aria-label="Default select example">
          <option selected class="fw-bold" style="color: white;">Leagues</option>
          <option value="Premier League" class="fw-bold" style="color: white;">Premier League</option>
          <option value="La Liga" class="fw-bold" style="color: white;">La Liga</option>
          <option value="Serie A" class="fw-bold" style="color: white;">Serie A</option>
          <option value="Bundesliga" class="fw-bold" style="color: white;">Bundesliga</option>
          <option value="Ligue 1" class="fw-bold" style="color: white;">Ligue 1</option>
          <option value="Portugal Liga NOS" class="fw-bold" style="color: white;">Portugal Liga NOS</option>
          <option value="Brazil Serie A" class="fw-bold" style="color: white;">Brazil Serie A</option>
          <option value="Russia Premier Liga" class="fw-bold" style="color: white;">Russia Premier Liga</option>
          <option value="Eredivisie" class="fw-bold" style="color: white;">Eredivisie</option>
          <option value="MLS" class="fw-bold" style="color: white;">MLS</option>
          <option value="Belgium Pro League" class="fw-bold" style="color: white;">Belgium Pro League</option>
          <option value="Türkiye Super League" class="fw-bold" style="color: white;">Türkiye Super League</option>
          <option value="China Super League" class="fw-bold" style="color: white;">China Super League</option>
          <option value="Ukraine Premier League" class="fw-bold" style="color: white;">Ukraine Premier League</option>
          <option value="Austria Bundesliga" class="fw-bold" style="color: white;">Austria Bundesliga</option>
          <option value="Saudi Arabia Professional League" class="fw-bold" style="color: white;">Saudi Arabia Professional League</option>
          <option value="Japan J1 League" class="fw-bold" style="color: white;">Japan J1 League</option>
          <option value="Greece Super League 1" class="fw-bold" style="color: white;">Greece Super League 1</option>
          <option value="Colombia Liga DIMAYOR I" class="fw-bold" style="color: white;">Colombia Liga DIMAYOR I</option>
          <option value="Scotland Premiership" class="fw-bold" style="color: white;">Scotland Premiership</option>
          <option value="Czech Republic Fortuna Liga" class="fw-bold" style="color: white;">Czech Republic Fortuna Liga</option>
          <option value="Switzerland Super League" class="fw-bold" style="color: white;">Switzerland Super League</option>
          <option value="Serbia Super liga" class="fw-bold" style="color: white;">Serbia Super liga</option>
          <option value="Denmark SuperLiga" class="fw-bold" style="color: white;">Denmark SuperLiga </option>
        </select>
      </div>
      <br>
      <h4>Team Search</h4>
      <div>
        <select class="dropdownMenu rounded ms-2 mt-3" style="background-color: crimson; height:38px; width:296px;" aria-label="Default select example">
          <option selected class="fw-bold" style="color: white;">Training Facilities (Min)</option>
          <option value="1" class="fw-bold" style="color: white;">Level 1</option>
          <option value="2" class="fw-bold" style="color: white;">Level 2</option>
          <option value="3" class="fw-bold" style="color: white;">Level 3</option>
          <option value="4" class="fw-bold" style="color: white;">Level 4</option>
          <option value="5" class="fw-bold" style="color: white;">Level 5</option>
        </select>
      </div>
      <div>
        <select class="dropdownMenu rounded ms-2 mt-3" style="background-color: crimson; height:38px; width:296px;" aria-label="Default select example">
          <option selected class="fw-bold" style="color: white;">İnfrastructure (Min)</option>
          <option value="1" class="fw-bold" style="color: white;">Level 1</option>
          <option value="2" class="fw-bold" style="color: white;">Level 2</option>
          <option value="3" class="fw-bold" style="color: white;">Level 3</option>
          <option value="4" class="fw-bold" style="color: white;">Level 4</option>
          <option value="5" class="fw-bold" style="color: white;">Level 5</option>
        </select>
      </div>
      <div>
        <select class="dropdownMenu rounded ms-2 mt-3" style="background-color: crimson; height:38px; width:296px;" aria-label="Default select example">
          <option selected class="fw-bold" style="color: white;">Player Recruitment System (Min)</option>
          <option value="1" class="fw-bold" style="color: white;">Level 1</option>
          <option value="2" class="fw-bold" style="color: white;">Level 2</option>
          <option value="3" class="fw-bold" style="color: white;">Level 3</option>
          <option value="4" class="fw-bold" style="color: white;">Level 4</option>
          <option value="5" class="fw-bold" style="color: white;">Level 5</option>
        </select>
      </div>
      <div>
        <select class="dropdownMenu rounded ms-2 mt-3" style="background-color: crimson; height:38px; width:296px;" aria-label="Default select example">
          <option selected class="fw-bold" style="color: white;">Infrastructure Quality (Min)</option>
          <option value="1" class="fw-bold" style="color: white;">Level 1</option>
          <option value="2" class="fw-bold" style="color: white;">Level 2</option>
          <option value="3" class="fw-bold" style="color: white;">Level 3</option>
          <option value="4" class="fw-bold" style="color: white;">Level 4</option>
          <option value="5" class="fw-bold" style="color: white;">Level 5</option>
        </select>
      </div>
    </div>
    <div class="col-md-8 offset-md-1 mt-5">
      <div class="row">
        <div class="card">
          <div class="col-md-2">
            <a href="oyuncubilgisayfa.php">
              <img src="/img/cristiano-ronaldo-al-nassr-presentation.jpg" width="50" alt="Yüklenemedi">
              <h6 class="d-inline ms-2">Cristiano Ronaldo</h6>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>