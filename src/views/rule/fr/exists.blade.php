<p>Le champ sous validation doit exister dans la base de données.</p>

<h4>Usage basique de la règle exists</h4>

<pre class="prettyprint"><code><span class="str">'state'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'exists:states'</span></code></pre>

<h4>Spécification d'une colonne particulière</h4>

<pre class="prettyprint"><code><span class="str">'state'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'exists:states,abbreviation'</span></code></pre>

<p>Vous pouvez également spécifier plus de conditions qui seront ajoutés en tant que clause "WHERE" à la requête :</p>

<pre class="prettyprint"><code><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'exists:staff,email,account_id,1'</span></code></pre>

<p>Passer <code>NULL</code> en tant que clause "where" ajoutera un test sur la valeur <code>NULL</code> en tant que valeur:</p>

<pre class="prettyprint"><code><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'exists:staff,email,deleted_at,NULL'</span></code></pre>