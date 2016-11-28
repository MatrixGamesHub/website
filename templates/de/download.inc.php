    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>
          Downloads
        </h1>
        <p>
          Find Matrix Games on GitHub
        </p>
      </div>
    </div>

    <div class="container">
      <h2>
        You want the whole project?
      </h2>
      <p>
        Please visit <a href="https://github.com/MatrixGamesHub" target="_blank"><b>github.com/MatrixGamesHub</b></a>
      </p>

      <h2>
        Matrix Games Binaries
      </h2>
       Creating or playing matrix games without a devolopment environment:<br>

       Windows: <a href="download/MatrixGames.zip"> <b>MatrixGames.zip</b> </a>

      <hr>

      <h2>
        Python environment installation guide
      </h2>
      <ul>
        <li>
          Download and install Python 3.4 <i>(recommended directory: `C:\Python34`):</i>
          <pre><a href="https://www.python.org/ftp/python/3.4.4/python-3.4.4.msi" target="_blank">https://www.python.org/ftp/python/3.4.4/python-3.4.4.msi</a></pre>
        </li>
        <li>
          Update PIP <i>(important):</i>
          <ul>
            <li>Open a console and change to the python installation folder.</li>
            <li>
              Execute the following command:
              <pre>python -m pip install --upgrade pip</pre>
            </li>
          </ul>
        </li>
        <li>
          Install serveral packages:
          <ul>
            <li>Open a console and change to the 'Scripts' directory of the python installation folder.</li>
            <li>
              Execute the following commands <i>(required):</i>
              <pre>pip install -U --pre -f https://wxpython.org/Phoenix/snapshot-builds/ wxPython_Phoenix
pip install -U thrift</pre>
            </li>
            <li>
              Execute the following commands <i>(to build executables):</i>
              <pre>pip install -U py2exe</pre>
            </li>
            <li>
              Execute the following commands <i>(to build documentation):</i>
              <pre>pip install -U Sphinx
pip install -U sphinx_rtd_theme</pre>
            </li>

          </ul>
        </li>
        <li>
          The current stable Thrift release (0.9.3) has a problem with Python 3. So we need to replace some files:
          <ul>
            <li>
              Donwload following zip file and replace the `%PYTHON_FOLDER%\Lib\site-packages\thrift` folder by the one in the zip file:
              <pre><a href="http://www.sg-dev.de/thrift.zip" target="_blank">http://www.sg-dev.de/thrift.zip</a></pre>
            </li>
          </ul>
        </li>
      </ul>


      <hr>

      <footer>
        <p>&copy; 2016 VonAncken</p>
      </footer>
    </div> <!-- /container -->
