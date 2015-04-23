<p>Le champ sous validation doit être unique dans la table de la base de donnée. Si l'option <code>column</code> n'est pas spécifié, le nom du champ sera utilisé.</p>

<h4>Usage basique de la règle</h4>

<pre class="prettyprint"><code><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'unique:users'</span></code></pre>

<h4>Spécification de la colonne</h4>

<pre class="prettyprint"><code><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'unique:users,email_address'</span></code></pre>

<h4>Force la règle à ignorer l'id donné</h4>

<pre class="prettyprint"><code><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'unique:users,email_address,10'</span></code></pre>

<h4>Ajout additionnel des clauses Where</h4>

<p>Vous pouvez aussi spécifier plusieurs conditions qui seront ajoutées comme clauses "where" à la requête :</p>

<pre class="prettyprint"><code><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'unique:users,email_address,NULL,id,account_id,1'</span></code></pre>

<p>Dans la règle ci-dessus, seules les lignes avec un <code>account_id</code> à <code>1</code> seront incluses dans la vérification du <code>unique</code>.</p>