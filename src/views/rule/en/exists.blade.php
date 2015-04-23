<p>The field under validation must exist on a given database table.</p>



<h4>Basic Usage Of Exists Rule</h4>
<pre class=" language-php"><code class=" language-php"><span class="token string">'state'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'exists:states'</span></code></pre>



<h4>Specifying A Custom Column Name</h4>
<pre class=" language-php"><code class=" language-php"><span class="token string">'state'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'exists:states,abbreviation'</span></code></pre>
<p>You may also specify more conditions that will be added as "where" clauses to the query:</p>
<pre class=" language-php"><code class=" language-php"><span class="token string">'email'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'exists:staff,email,account_id,1'</span></code></pre>
<p>Passing <code class=" language-php"><span class="token keyword">NULL</span></code> as a "where" clause value will add a check for a <code class=" language-php"><span class="token keyword">NULL</span></code> database value:</p>
<pre class=" language-php"><code class=" language-php"><span class="token string">'email'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'exists:staff,email,deleted_at,NULL'</span></code></pre>
<p><a name="rule-image"></a></p>