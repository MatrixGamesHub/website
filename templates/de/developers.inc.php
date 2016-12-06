    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <h1>
          Developers
        </h1>
        <p>
          So you want to support the community and want to participate in the MatrixGames project, great. Here is what you need...
        </p>

      </div>
    </div>

    <div class="container">
      <p>
        The matrix games, the mtxPython framework and the game console are all written in python, so for the development you need a python development environment.
        Because the project requires many different packages (such as wxPython Phoenix, Thrift or Sphinx) we provide a virtual environment for python (venv) with all packages necessary for the development.<br>
      </p>

      <h2>
        Set up a python development environment
      </h2>

      <ol>
        <li>
          Download and install Python 3.4 <i>(recommended directory: `C:\Python34`):</i>
          <br> <br>
          <a href="https://www.python.org/ftp/python/3.4.4/python-3.4.4.msi"
             class="btn btn-primary" role="button"> Download </a>
        </li>
        <br>
        <li>
          We provide a virtual environment for python (venv) with all packages necessary for the development.<br>

          <ol>
            <li>
              Create the following directory:
              <pre>C:\PythonVirtualEnv\<wbr>MatrixGames</pre>
              If it already exists, make sure it is empty.<br>

              <b>Attention:</b> You <u>must</u> clone the repository to <code>C:\PythonVirtualEnv\<wbr>MatrixGames</code>, because the path is hard coded in all binaries (e.g. pip.exe).

            </li>
            <br>
            <li>
              Change to the directory and clone the repository
              <ul>
                <li>
                  Via HTTPS:
                  <pre>git clone https://github.com/MatrixGamesHub/PythonVirtualEnv.git .</pre>
                </li>
                or<br>
                <li>
                  Via SSH:
                  <pre>git clone git@github.com:MatrixGamesHub/PythonVirtualEnv.git .</pre>
                </li>
              </ul>
              <b>Attention:</b> The point at the end is important and ensures that GIT clones into the current directory! <br>
              <br>
              If you have not installed python in the recommended directory, you have to change the <code>home</code> variable in <code>C:\PythonVirtualEnv\<wbr>MatrixGames\pyvenv.cfg</code> to your python path.
            </li>
          </ol>
        </li>
      </ol>

      <h2>
        How to run python scripts
      </h2>
      <p>
        The virtual environment contains the binary of the python interpreter (python.exe), which you have to use if you want to run scripts from the Matrix Games project.
      </p>


      <div class="panel-group" id="accordion">

        <div class="panel panel-default">
          <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
              <h4 class="panel-title">
                If you are using Eclipse ...
              </h4>
            </a>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
              Create a new interpreter <code>Window -&gt; Preferences -&gt; PyDev -&gt; Interpreters -&gt; Python Interpreters</code> named <code>Python - Matrix Games</code> that points to the binary <code>C:\PythonVirtualEnv\<wbr>MatrixGames\Scripts\python.exe</code><br>
              <br>
              <img class="img-responsive"  src="images/eclipseInstructions/step1.png"/><br>
              <img class="img-responsive"  src="images/eclipseInstructions/step2.png"/><br>
              Assign the interpreter <code>Python - Matrix Games</code> to the project by right-clicking on the project <code>Properties -&gt; PyDev -&gt; Interpreter/Grammar -&gt; Interpreter</code>.<br>
              <br>
              <img class="img-responsive" src="images/eclipseInstructions/step3.png"/>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
              <h4 class="panel-title">
                If you are developing in a console, ...
              </h4>
            </a>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
              You can activate the virtual environment by running the batch <code>C:\PythonVirtualEnv\<wbr>MatrixGames\Scripts\activate.bat</code>.
              This will adjust the <code>path</code> environment variable so you can run a script as usual with <code>python script.py</code><br>
              <br>
              If you don't want the activation, you can simply run a script by using the full path to the interpreter: <code>C:\PythonVirtualEnv\<wbr>MatrixGames\Scripts\python script.py</code>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- /container -->
