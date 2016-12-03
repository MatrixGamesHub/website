    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>
          Game Console
        </h1>
        <p>
          To play your Matrix Games you need a game console that manage and run your games.
          Either you write your own game console or you use our, which is implemented with
          wxPython.
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row" style="display: table;table-layout: fixed;">
        <div class="col-md-6">
          <h2>
            What are the tasks of the game console?
          </h2>
          <p>
            The game console is responsible for several tasks.
            <ul>
              <li> managing the games </li>
              <ul>
                <li> list all available games </li>
                <li> load a game </li>
              </ul>
              <li> providing a controller interface </li>
              <li> sending changes on the playing field to the game renderers </li>
              <li> managing the clients </li>
              <li> optional: providing a game renderer </li>

            </ul>
          </p>
        </div>
        <div class="col-md-6">
          <img src="images/gameConsole/screenshot1.png"/>
        </div>
      </div>



      <h2>
        Controller Interface
      </h2>
      <p>
        <pre><code class="thrift">
namespace csharp MtxControllerService
namespace py MtxControllerService


enum Direction {
    UP    = 0x0,
    RIGHT = 0x1,
    DOWN  = 0x2,
    LEFT  = 0x3,
}


struct GameInfo {
    1: string name,
    2: string description,
    3: i8 maxPlayers,
}


exception GameError {
    1: string errorMessage,
}


service MtxControllerService {
    void Ping(),
    i16 ConnectRenderer(1: string host, 2: i32 port),
    void DisconnectRenderer(1: i16 rendererId),
    void MovePlayer(1: i8 number, 2: Direction direction) throws (1:GameError gameError),
    void JumpPlayer(1: i8 number, 2: Direction direction) throws (1:GameError gameError),
    list<string> GetGames(),
    GameInfo GetGameInfo(1: string name) throws (1:GameError gameError),
    void LoadGame(1: string name) throws (1:GameError gameError),
    void ResetLevel(),
}
</code></pre>

      </p>
    </div> <!-- /container -->
