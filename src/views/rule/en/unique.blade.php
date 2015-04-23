<p>The field under validation must be unique on a given database table. If the <code class=" language-php">column</code> option is not specified, the field name will be used.</p>



<h4>Basic Usage Of Unique Rule</h4>
<pre class=" language-php"><code class=" language-php"><span class="token string">'email'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:users'</span></code></pre>



<h4>Specifying A Custom Column Name</h4>
<pre class=" language-php"><code class=" language-php"><span class="token string">'email'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:users,email_address'</span></code></pre>



<h4>Forcing A Unique Rule To Ignore A Given ID</h4>
<pre class=" language-php"><code class=" language-php"><span class="token string">'email'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:users,email_address,10'</span></code></pre>



<h4>Adding Additional Where Clauses</h4>
<p>You may also specify more conditions that will be added as "where" clauses to the query:</p>
<pre class=" language-php"><code class=" language-php"><span class="token string">'email'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:users,email_address,NULL,id,account_id,1'</span></code></pre>
<p>In the rule above, only rows with an <code class=" language-php">account_id</code> of <code class=" language-php"><span class="token number">1</span></code> would be included in the unique check.</p>