@section('ranking')
<div class="col-xs-3">
  <h3 class="text-center">Top 5 Players</h3>
  <div id="player-ranking" class="row carousel" data-ride="carousel">
    <div class="col-xs-4 player-ranking-list col-xs-offset-1">
      <div class="row player-ranking-player">
        <div class="col-xs-4 "><b>#</b></div>
        <div class="col-xs-8 player-ranking-username"><b>Player</b></div>
      </div>
      <div data-target="#player-ranking" data-slide-to="0" class="row player-ranking-player active">
        <div class="col-xs-4">1</div>
        <div class="col-xs-8 player-ranking-username">Venom</div>
      </div>
      <div data-target="#player-ranking" data-slide-to="1" class="row player-ranking-player">
        <div class="col-xs-4">2</div>
        <div class="col-xs-8 player-ranking-username">Pufje</div>
      </div>
      <div data-target="#player-ranking" data-slide-to="2" class="row player-ranking-player">
        <div class="col-xs-4">3</div>
        <div class="col-xs-8 player-ranking-username">Teddie</div>
      </div>
      <div data-target="#player-ranking" data-slide-to="3" class="row player-ranking-player">
        <div class="col-xs-4">4</div>
        <div class="col-xs-8 player-ranking-username">Ganja</div>
      </div>
      <div data-target="#player-ranking" data-slide-to="4" class="row player-ranking-player">
        <div class="col-xs-4">5</div>
        <div class="col-xs-8 player-ranking-username">Crackers</div>
      </div>
    </div>

    <div class="player-ranking-images col-xs-6">
      <div class="item active">
        <div class="player-ranking-image text-center">
          <img src="./img/char/1.png">
        </div>
        <ul class="player-ranking-info text-center">
          <li>Night Lord</li>
          <li><b>Lv.</b> 184</li>
          <li><b>Rb.</b> 10</li>
        </ul>
      </div>
      <div class="item">
        <div class="player-ranking-image text-center">
          <img src="./img/char/2.png">
        </div>
        <ul class="player-ranking-info text-center">
          <li>Hero</li>
          <li><b>Lv.</b> 176</li>
          <li><b>Rb.</b> 3</li>
        </ul>
      </div>
      <div class="item">
        <div class="player-ranking-image text-center">
          <img src="./img/char/3.png">
        </div>
        <ul class="player-ranking-info text-center">
          <li>Bow Master</li>
          <li><b>Lv.</b> 171</li>
          <li><b>Rb.</b> 2</li>
        </ul>
      </div>
      <div class="item">
        <div class="player-ranking-image text-center">
          <img src="./img/char/4.png">
        </div>
        <ul class="player-ranking-info text-center">
          <li>Bishop</li>
          <li><b>Lv.</b> 170</li>
          <li><b>Rb.</b> 2</li>
        </ul>
      </div>
      <div class="item">
        <div class="player-ranking-image text-center">
          <img src="./img/char/5.png">
        </div>
        <ul class="player-ranking-info text-center">
          <li>Bishop</li>
          <li><b>Lv.</b> 165</li>
          <li><b>Rb.</b> 1</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@stop
