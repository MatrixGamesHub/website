    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>
          Matrix Games
        </h1>
        <p>
          Matrix Games are little games written in python 3 with the mtxPython Framework.
        </p>
        <p>
          These games are based on a two-dimensional matrix like
          <a href="https://en.wikipedia.org/wiki/Sokoban">Sokoban</a>,
          <a href="https://en.wikipedia.org/wiki/Bomberman">Bomberman</a> or maze puzzles in
          general. There is a game console written in Python 3 on which the games can be played.
          The game console has a thrift interface that allows different clients to connect. These
          clients do not necessarily have to be written in python, but in every language for which
          there is also a library for Thrift. Thus, it is possible to write a client with which
          the games can be presented graphically nicely.
        </p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>
            mtxPython
          </h2>
          <p>
            The python framework every Matrix Game is based on.
          </p>
          <p>
            <a class="btn btn-primary" href="mtxPython.php" role="button">View details &raquo;</a>
          </p>
        </div>
        <div class="col-md-4">
          <h2>
            Game Console
          </h2>
          <p>
             To play your Matrix Games you need a game console that manage and run your games.
             Either you write your own game console or you use our, which is implemented with
             wxPython.
          </p>
          <p>
            <a class="btn btn-primary" href="gameConsole.php" role="button">View details &raquo;</a>
          </p>
       </div>
        <div class="col-md-4">
          <h2>
            Client
          </h2>
          <p>
            The possibilities to visualize the games with wxPython are limited. Thanks to a Thrift
            interface, it is possible to write a client in an environment that can graphically get
            the most out of your game. Write your own client or use our client based on Unity.
          </p>
          <p>
            <a class="btn btn-primary" href="#" role="button">View details &raquo;</a>
          </p>
        </div>
      </div>
    </div> <!-- /container -->
