<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Programme Individuel de Reprise Football – 21 juillet → 17 août 2025</title>

<meta name="description" content="Plan individuel de reprise foot (21 juil – 17 août 2025) : endurance, vitesse, prévention périostite…">
<meta property="og:type" content="article">
<meta property="og:title" content="Programme Reprise Football – Seniors">
<meta property="og:description" content="Endurance, force, vitesse, agilité : télécharge le plan complet.">
<meta property="og:image" content="https://exemple.com/img/cover.jpg">
<meta name="twitter:card" content="summary_large_image">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="manifest.json">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style2.css">
</head>

<body>
<a href="#main" class="skip-link">Aller au contenu principal</a>
<nav id="main-nav">
  <div class="nav-left">
    <label for="weekSelect">Semaine</label>
    <select id="weekSelect">
      <option value="#phase1">1</option>
      <option value="#phase2">2</option>
      <option value="#phase3">3</option>
      <option value="#phase4">4</option>
    </select>
  </div>
  <div class="nav-right">
    <?php if($loggedIn): ?>
      <a href="logout.php" id="logoutLink">Déconnexion</a>
    <?php else: ?>
      <a href="login.php" id="loginLink">Connexion</a>
      <a href="signup.php" id="signupLink">Inscription</a>
    <?php endif; ?>
    <button id="printTopBtn">Imprimer</button>
  </div>
</nav>

<button id="toTop"   class="action-btn" aria-label="Revenir en haut">
  <svg viewBox="0 0 24 24"><path d="M12 4l-7 8h4v8h6v-8h4z"/></svg>Haut
</button>

<div class="container" id="main">

<?php if(!$loggedIn): ?>
<p class="tip small">Connecte-toi pour sauvegarder ta progression.</p>
<?php endif; ?>

<!-- 📡 COLLE ICI TON PROGRAMME COMPLET  📡
     (échelle RPE, BAP, phases 1‑4, tableaux, conseils, etc.) -->


<h1>Programme Individuel de Reprise Football – Seniors</h1>
<p class="meta"><strong>Période :</strong> 21 juillet 2025 → 17 août 2025 &nbsp;| <strong>Objectif :</strong> Endurance, force, vitesse, agilité, prévention blessures, technique.</p>

<div class="tip">
<strong>Repères d’intensité</strong> — RPE 1-10 (ressenti), %FCmax, %Vmax : Aérobie facile RPE 4-5 (~60–70 % FCmax) ; soutenu RPE 6-7 (~75–85 % FCmax) ; intermittent court RPE 8-9 (~90–95 % FCmax) ; sprints 90–100 % Vmax avec 2–3′ de récupération complète.
</div>

<details open>
  <summary>📊 Échelle RPE 1→10 &amp; exemples pratiques</summary>
  <ul>
    <li><strong>RPE 1–2</strong> : très facile, échauffement, marche lente.</li>
    <li><strong>RPE 3–4</strong> : <u>cardio léger</u>. Respiration facile, tu parles en phrases complètes. <br>
      <em>Exemples :</em> vélo souple (pas de brûlure), natation fluide, marche rapide, jogging très facile.</li>
    <li><strong>RPE 5–6</strong> : soutenu mais confortable. Tu parles par <u>courtes phrases</u>. <br>
      <em>Exemples :</em> footing d’endurance fondamentale, fartlek modéré.</li>
    <li><strong>RPE 7–8</strong> : difficile. Tu parles par <u>mots</u> seulement ; l’effort pique. <br>
      <em>Exemples :</em> intervalles longs, intermittents, séries plyométriques denses.</li>
    <li><strong>RPE 9–10</strong> : quasi max / max. Impossible de parler. <br>
      <em>Exemples :</em> sprints courts, efforts de 20–30″ à VMA, fin de bloc très intense.</li>
  </ul>
  <p class="small"><strong>Utilisation dans ce plan :</strong> Les séances de récupération visent <strong>RPE 3–4</strong> ; l’endurance soutenue <strong>RPE 5–6</strong> ; l’intermittent spécifique  <strong>RPE 8–9</strong> ; les sprints sont à  <strong>90–100 % Vmax</strong> avec récupération complète.</p>
</details>


<details open>
  <summary>🔒 Bloc Anti‑Périostite (BAP) — à intégrer dans chaque échauffement (10–12′)</summary>
  <ul>
    <li><strong>Auto‑massage</strong> mollets + bord interne tibia : 1–2′/côté (rouleau ou balle).</li>
    <li><strong>Mobilité cheville (dorsiflexion au mur)</strong> : 2×12 / jambe, maintenir 2–3 s en fin d’amplitude, talon au sol.</li>
    <li><strong>Tibialis raises au mur</strong> : 2×15–20, montée contrôlée, <em>descente lente 3 s</em>. Brûlure OK, douleur vive = stop.</li>
    <li><strong>Élastique cheville</strong> : <em>Éversion</em> (péroniers) 2×15 + <em>Inversion</em> 2×15 / côté.</li>
    <li><strong>Mollets excentriques</strong> : 
      <ul>
        <li>Jambe tendue (gastrocnémien) 2×15 — montée bilatérale, <em>descente unilatérale 3 s</em>.</li>
        <li>Genou fléchi (soléaire) 2×15 — même tempo.</li>
      </ul>
    </li>
    <li><strong>Marches techniques</strong> : sur talons 2×20 m ; sur pointes 2×20 m ; bord interne 1×15 m ; bord externe 1×15 m.</li>
    <li><strong>Bondissements très légers</strong> : 2×10, amorti <em>silencieux</em>, genou souple.</li>
  </ul>
  <p class="small"><strong>Progression course :</strong> 5–8′ trot facile après le BAP ; les 10 premières minutes de la séance restent très faciles. Première accélération uniquement si aucune gêne tibiale. Sur sol dur, diminue le volume d’accélérations.</p>
  <p class="small"><strong>Si « mollet qui se durcit » / engourdissement :</strong> stoppe, fais 20 pompes musculaires cheville (flexion/extension rapides), marche 1′, auto‑massage 30–45 s, reprends en trot très facile. Si la sensation revient → arrêter la séance.</p>
</details>

<details open>
  <summary>⚽️ Schémas &amp; vidéos — Drills d’agilité (COD) avec et sans ballon</summary>

  <h3>1) Slalom de cônes — appuis rapides</h3>
  <p>Sans ballon d’abord pour la qualité des appuis, puis avec ballon quand c’est propre.</p>
  <pre class="ascii">
Départ →   o   o   o   o   o   o   Arrivée
            ↑   ↑   ↑   ↑   ↑   ↑
Espacement ≈ 2 m entre cônes | Longueur ≈ 10–12 m
</pre>
  <ul class="small">
    <li><strong>Sans ballon :</strong> 6–8 passages. Corps bas, appuis courts, pousser fort avec la <em>jambe externe</em>. Repos 40–50 s.</li>
    <li><strong>Avec ballon :</strong> 4–6 passages. Conduite intérieur/extérieur, toucher court, tête relevée. Objectif : rester à ±10 % du temps sans ballon.</li>
  </ul>

  <h3>2) Carré COD (version simple du T‑Test)</h3>
  <pre class="ascii">
Carré 5 m x 5 m

A o-----o B
  |     |
  |     |
D o-----o C

Départ à A → A→B sprint, B→C latéral, C→D back‑pedal (reculer),
D→A latéral. Freiner AVANT chaque cône, repartir explosif.
</pre>
  <ul class="small">
    <li><strong>Sans ballon :</strong> 6 reps chronométrées. Repos 60–75 s. Genou aligné, talon au sol au freinage.</li>
    <li><strong>Avec ballon :</strong> Variante 1 conduite sur tout le parcours. Variante 2 sans ballon puis <em>contrôle orienté + passe</em> sur cible à l’arrivée.</li>
  </ul>

  <h3>3) T‑Test (parcours officiel)</h3>
  <pre class="ascii">
          C o
            |
A o---------o B   (A→B = 10 m)
            |
          D o

C et D sont à 5 m à gauche/droite de B.
Séquence : A→B sprint ; B→C latéral ; C→D latéral ; D→B latéral ; B→A back‑pedal.
</pre>
  <ul class="small">
    <li><strong>Sans ballon :</strong> 4–6 reps <em>chronométrées</em>, repos 90 s. Freinage propre, buste gainé.</li>
    <li><strong>Avec ballon (phase 3‑4) :</strong> A→B sans ballon, saisis le ballon à B, B→C→D→B en conduite rapide, dépose le ballon, B→A en back‑pedal.</li>
  </ul>

  <h3>4) 5‑10‑5 (Pro‑Agility)</h3>
  <pre class="ascii">
o----5 m----o----5 m----o
Gauche      Centre      Droite

Départ centre. Sprint 5 m vers la droite → 10 m vers la gauche → 5 m retour centre.
</pre>
  <ul class="small">
    <li>4–6 reps, repos 90 s. Travail de demi‑tours rapides et d’appuis linéaires. Option ballon : poser/ramasser le ballon au cône central entre les segments.</li>
  </ul>

  <h3>Vídéos utiles</h3>
  <ul class="small">
    <li><a href="https://youtu.be/qFS_kGB7DFA?si=62NZovzrB3xW7Ysl" target="_blank" rel="noopener">3 Speed &amp; Agility Drills For Soccer | Joner Football</a></li>
    <li><a href="https://youtu.be/k7xUw9Sjf-c?si=PHXQAn4c_ag7Jpx0" target="_blank" rel="noopener">How to Perform the T Test (NSCA)</a></li>
  </ul>
</details>

<!-- ============================== PHASE 1 ============================== -->
<h2 id="phase1">Phase 1 — Réactivation &amp; Adaptation <span class="muted">(3 séances) — 21 → 27 juillet 2025)</span></h2>

<div class="table-wrap"><div class="table-scroll">
  <table class="table--has-check">
    <thead>
      <tr>
        <th class="check sticky">✓</th>
        <th class="jour sticky">Date</th>
        <th>Objectif</th>
        <th>Contenu détaillé</th>
        <th>Charge &amp; Qualité</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="check sticky"><input type="checkbox" aria-label="Lun 21/07 fait"></td>
        <td class="jour sticky">Lun 21/07</td>
        <td>Réveil cardio + mobilité + renfo de base</td>
        <td>
          <ul>
            <li><strong>Échauffement 15–20′</strong> — <u>inclure le <code class="k">BAP</code></u>, puis 5′ trot léger, éducatifs (talons‑fesses, montées de genoux), balancements de jambe.</li>
            <li><strong>Aérobie 30–40′</strong> : footing facile <span class="rpe">RPE 4–5</span> ou vélo/natation.</li>
            <li><strong>Renforcement 20–30′</strong> : 3×10–15 Squats ; 3×10–15 Fentes avant ; 3×30–45″ Planche ventrale ; 3×30–45″ Planche latérale.</li>
            <li><strong>Prévention adducteurs/abducteurs</strong> : élastique 3×15–20 / côté.</li>
            <li><strong>Retour au calme 10′</strong> : marche + étirements 20–30″.</li>
          </ul>
        </td>
        <td>Volume 70–100′. Focus technique parfaite, genoux alignés, respiration.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox" aria-label="Mer 23/07 fait"></td>
        <td class="jour sticky">Mer 23/07</td>
        <td>Aérobie alternative + core</td>
        <td>
          <ul>
            <li><strong>Échauffement 10–12′</strong> — <u><code class="k">BAP</code> complet</u> (insiste sur tibialis raises) + 5′ vélo facile.</li>
            <li><strong>Vélo/elliptique 40′</strong> RPE 5, avec 6 × 20″ accélérations / 40″ facile.</li>
            <li><strong>Core 20′</strong> : Planche commando 3×30″ ; Superman 3×12 ; Dead bug 3×10 / côté.</li>
            <li>Auto‑massage mollets/ischios 5′.</li>
          </ul>
        </td>
        <td>Impact ↓ ; cadence fluide. Noter sensation tibiale.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox" aria-label="Ven 25/07 fait"></td>
        <td class="jour sticky">Ven 25/07</td>
        <td>Footing + technique légère</td>
        <td>
          <ul>
            <li><strong>Échauffement 15–18′</strong> — <u><code class="k">BAP</code></u> + 5′ trot + éducatifs doux.</li>
            <li><strong>Footing 30′</strong> RPE 5, surface souple.</li>
            <li><strong>Technique 20′</strong> : conduite intérieur/extérieur 8×20 m ; passe‑mur 4×1′ pied fort, 3×1′ pied faible.</li>
            <li><strong>Gainage latéral</strong> 3×30″ / côté.</li>
          </ul>
        </td>
        <td>Coordination + toucher de balle. Pas d’accélérations si tibia sensible.</td>
      </tr>
    </tbody>
  </table>
</div></div>

<!-- ============================== PHASE 2 ============================== -->
<h2 id="phase2">Phase 2 — Développement Fondamental <span class="muted">(4 séances) — 28 juillet → 3 août 2025)</span></h2>

<div class="table-wrap"><div class="table-scroll">
  <table class="table--has-check">
    <thead>
      <tr>
        <th class="check sticky">✓</th>
        <th class="jour sticky">Date</th>
        <th>Objectif</th>
        <th>Contenu détaillé</th>
        <th>Intensité &amp; repères</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Lun 28/07</td>
        <td>Endurance &amp; rythme (fartlek)</td>
        <td>
          <ul>
            <li><strong>Échauffement 15–18′</strong> — <u><code class="k">BAP</code></u> + 5′ trot + éducatifs.</li>
            <li><strong>Course 40–50′</strong> : toutes les ∼6′, 5–6 accélérations de 50–80 m à 75–85 % Vmax, retour à l’allure facile.</li>
            <li><strong>Retour au calme 10′</strong> : marche + stretching.</li>
          </ul>
        </td>
        <td>Aérobie RPE 5–6 ; accélérations propres. Si tiraillement tibia → réduire à 3–4 accélérations.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Mar 29/07</td>
        <td>Force générale (circuit)</td>
        <td>
          <ul>
            <li><strong>Échauffement 15′</strong> — <u><code class="k">BAP</code></u> (volume mollets excentriques réduit : 1×15 + 1×15).</li>
            <li><strong>Circuit 3–4 tours</strong> : 1′ travail / 30″ repos ; 2′ entre tours : Squats jump ; Pompes ; Fentes marchées 12–15 pas ; Good‑mornings bâton 15 ; Mountain climbers ; Planche touches épaules.</li>
            <li>Étirements + rouleau 10′ (mollets/tibial postérieur).</li>
          </ul>
        </td>
        <td>RPE 7 en fin de tour. Dos neutre, réceptions silencieuses.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Jeu 31/07</td>
        <td>Vitesse &amp; agilité</td>
        <td>
          <ul>
            <li><strong>Échauffement 20′</strong> — <u><code class="k">BAP</code></u> + gammes + foulées bondissantes légères.</li>
            <li><strong>Sprints</strong> 6–8 × 20–30 m à 80–90 % Vmax ; récup complète en marchant.</li>
            <li><strong>Agilité 15–20′</strong> :
              <ul>
                <li><strong>Slalom sans ballon</strong> 6–8 passages, repos 40–50 s → <strong>avec ballon</strong> 4 passages.</li>
                <li><strong>Carré 5×5 m</strong> 6 reps <em>chronométrées</em>, repos 60–75 s → <strong>progression ballon</strong> 3 reps (conduite ou contrôle + passe).</li>
              </ul>
            </li>
            <li>Retour au calme 10′.</li>
          </ul>
        </td>
        <td>Qualité &gt; quantité. Si tibia sensible, remplacer 2 sprints par accélérations progressives 60 m.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Sam 02/08</td>
        <td>Récup active &amp; mobilité</td>
        <td>
          <ul>
            <li><strong>Cardio léger 30–45′</strong> <span class="rpe">RPE 3–4</span> (vélo/natation/marche rapide).</li>
            <li><strong>Mobilité 20–30′</strong> + auto‑massage tibia/mollets.</li>
            <li><strong>Option</strong> : <u><code class="k">BAP</code></u> très allégé (1 série de chaque).</li>
          </ul>
        </td>
        <td>But : fraîcheur, amplitude, tissus détendus.</td>
      </tr>
    </tbody>
  </table>
</div></div>

<!-- ============================== PHASE 3 ============================== -->
<h2 id="phase3">Phase 3 — Spécification &amp; Intensification <span class="muted">(4–5 séances) — 4 → 10 août 2025)</span></h2>

<div class="table-wrap"><div class="table-scroll">
  <table class="table--has-check">
    <thead>
      <tr>
        <th class="check sticky">✓</th>
        <th class="jour sticky">Date</th>
        <th>Objectif</th>
        <th>Contenu détaillé</th>
        <th>Intensité &amp; repères</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Mar 05/08</td>
        <td>Intermittent + technique</td>
        <td>
          <ul>
            <li><strong>Échauffement 20′</strong> — <u><code class="k">BAP</code></u> + conduite/passes.</li>
            <li><strong>Intermittent</strong> : 15″/15″ ou 30″/30″ — 2×(8–10′) ; 3′ repos entre blocs.</li>
            <li><strong>Technique 15–20′</strong> : conduite rapide cônes, passes courtes/longues.</li>
          </ul>
        </td>
        <td>Efforts à 90–95 % FCmax ; rester relâché sur les repos.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Mer 06/08</td>
        <td>Force &amp; puissance</td>
        <td>
          <ul>
            <li><strong>Échauffement 15′</strong> — <u><code class="k">BAP</code></u> (réduire les excentriques mollets à 1×12 si la plyo te charge).</li>
            <li><strong>Plyométrie 2–3×6–10</strong> : Box jumps ; Fentes sautées ; Sauts verticaux.</li>
            <li><strong>Renforcement 3×10–15</strong> : RDL léger ; Nordic hamstring (assisté) ; Gainage dynamique (commando, Russian twists).</li>
          </ul>
        </td>
        <td>Repos 90″–2′ en plyo. Cherche des réceptions « silencieuses ».</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Ven 08/08</td>
        <td>Vitesse, agilité &amp; réactivité (+ ballon)</td>
        <td>
          <ul>
            <li><strong>Échauffement 20′</strong> — <u><code class="k">BAP</code></u> + changements d’appuis.</li>
            <li><strong>Sprints 10–20 m</strong> : 8–10 rep à 90–100 % Vmax, récup ≥ 2–3′.</li>
            <li><strong>Agilité 15–20′</strong> :
              <ul>
                <li><strong>T‑Test</strong> 4–6 reps <em>chronométrées</em>, repos 90 s.</li>
                <li><strong>5‑10‑5</strong> 4–6 reps, repos 90 s.</li>
                <li><strong>Progression ballon</strong> : T‑Test mixte (prendre/déposer ballon à B) 2–3 reps.</li>
              </ul>
            </li>
            <li><strong>Ballon 10′</strong> : sprints avec conduite rapide.</li>
          </ul>
        </td>
        <td>Premier pas explosif ; éviter surfaces très dures.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Sam 09/08</td>
        <td>Technique &amp; petits jeux</td>
        <td>
          <ul>
            <li><strong>Échauffement 10′</strong> — <u><code class="k">BAP</code></u> allégé (1 série de chaque + tibialis 2×15).</li>
            <li><strong>Technique 30′</strong> : contrôle/passe, conduite multi‑surfaces, frappes précision &amp; puissance.</li>
            <li><strong>Jeux réduits 30–40′</strong> : 1v1, 2v2, 3v3.</li>
          </ul>
        </td>
        <td>Volume technique ↑, intensité modérée. Deux pieds.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Dim 10/08</td>
        <td class="opt">Récupération active (optionnel)</td>
        <td>Vélo 35–45′ RPE 3–4 + mobilité 20–30′ + auto‑massage tibia/mollets.</td>
        <td>Optionnel — viser jambes légères.</td>
      </tr>
    </tbody>
  </table>
</div></div>

<!-- ============================== PHASE 4 ============================== -->
<h2 id="phase4">Phase 4 — Affûtage &amp; Pré‑compétition <span class="muted">(3–4 séances) — 11 → 17 août 2025)</span></h2>

<div class="table-wrap"><div class="table-scroll">
  <table class="table--has-check">
    <thead>
      <tr>
        <th class="check sticky">✓</th>
        <th class="jour sticky">Date</th>
        <th>Objectif</th>
        <th>Contenu détaillé</th>
        <th>Intensité &amp; repères</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Lun 11/08</td>
        <td>Intermittent court &amp; explosivité</td>
        <td>
          <ul>
            <li><strong>Échauffement 20′</strong> — <u><code class="k">BAP</code></u> + éducatifs.</li>
            <li><strong>20″/10″</strong> : 2×5′ (≈20 efforts), 3′ repos entre blocs. Alternative : 30″ à VMA.</li>
            <li><strong>Pliométrie légère 10′</strong> : bondissements, sauts pieds joints (réceptions douces).</li>
          </ul>
        </td>
        <td>RPE 8–9 sur efforts, relâchement sur récup. Si tibia réagit : passer en 15″/15″.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Mer 13/08</td>
        <td>Force ciblée &amp; gainage spécifique</td>
        <td>
          <ul>
            <li><strong>Échauffement 15′</strong> — <u><code class="k">BAP</code></u>.</li>
            <li><strong>Ischios</strong> : Hip‑thrust uni 3×12 ; Nordic assisté 3×6.</li>
            <li><strong>Adducteurs</strong> : Copenhagen plank 3×30″/côté.</li>
            <li><strong>Fessiers</strong> : Monster walk élastique 3×15 m.</li>
            <li><strong>Chevilles/Mollets</strong> : montées pointes 3×20 (pieds //, pointe ext., pointe int.).</li>
            <li><strong>Gainage fonctionnel</strong> : planche avec mouvements bras/jambes 3×40″ ; farmer carry si charges.</li>
          </ul>
        </td>
        <td>RPE 6–7. Contrôle lombaire, alignement genou‑cheville.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Ven 15/08</td>
        <td>Vitesse &amp; agilité avec ballon + frappes</td>
        <td>
          <ul>
            <li><strong>Échauffement 20′</strong> — <u><code class="k">BAP</code></u> + appuis rapides.</li>
            <li><strong>Sprints rupture</strong> : 8 × (10 m + 15 m à 45°), récup 2–3′.</li>
            <li><strong>Parcours technique</strong> : slalom → passe cible → sprint 10 m (6 reps).</li>
            <li><strong>Tirs</strong> : 3 blocs — 5 précision + 5 puissance ; alterner D/G ; intégrer 2 têtes si possible.</li>
          </ul>
        </td>
        <td>Fraîcheur &gt; volume. Si match-test proche, réduire de 20–30 %.</td>
      </tr>

      <tr>
        <td class="check sticky"><input type="checkbox"></td>
        <td class="jour sticky">Dim 17/08</td>
        <td class="opt">Récupération / Étirements (optionnel)</td>
        <td>Natation 30–45′ ou marche 45′ ; étirements longs + auto‑massages 10–15′ (tibial postérieur, mollets).</td>
        <td>Si reprise collective le lendemain : séance très douce ou repos complet.</td>
      </tr>
    </tbody>
  </table>
</div></div>

<!-- TABLEAU DE SUIVI -->
<h2>Suivi chronométrique &amp; sensations</h2>
<div class="table-wrap"><div class="table-scroll">
  <table>
    <thead>
      <tr>
        <th class="sticky jour">Date</th>
        <th>Drill</th>
        <th>Sans ballon – meilleur temps</th>
        <th>Avec ballon – meilleur temps</th>
        <th>RPE (1–10)</th>
        <th>Sensations tibia/mollet</th>
        <th>Notes</th>
      </tr>
    </thead>
    <tbody>
      <tr><td class="sticky jour"></td><td>Slalom 10–12 m</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td class="sticky jour"></td><td>Carré 5×5 m</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td class="sticky jour"></td><td>T‑Test</td><td></td><td></td><td></td><td></td><td></td></tr>
      <tr><td class="sticky jour"></td><td>5‑10‑5</td><td></td><td></td><td></td><td></td><td></td></tr>
    </tbody>
  </table>
</div></div>

<h2>Conseils essentiels &amp; gestion des périostites</h2>
<div class="grid2">
  <div>
    <ul class="small">
      <li><strong>Charge &amp; surfaces :</strong> privilégie herbe/stabilisé ; évite longues portions béton/asphalte. Augmente le volume d’accélérations progressivement (+1–2/semaine).</li>
      <li><strong>Chaussures :</strong> semelles en bon état ; alterne paires ; drop modéré utile si tension mollets.</li>
      <li><strong>Hydratation &amp; électrolytes :</strong> chaleur = crampes et raideurs. 500 ml 2 h avant, 150–250 ml toutes les 15–20′, 500 ml + électrolytes après.</li>
      <li><strong>Sommeil :</strong> 7–9 h ; sieste 20–30′ les jours durs.</li>
      <li><strong>Progressivité :</strong> si douleur tibiale ≥ 3/10 pendant 48 h, réduis le volume de course de 30 % et privilégie vélo/natation 3–5 jours.</li>
    </ul>
  </div>
  <div>
    <ul class="small">
      <li><strong>Signe d’alerte :</strong> douleur localisée et sensible à la pression sur le bord interne tibia → repos relatif, glace 10′ (si inflammatoire), BAP quotidien sans bondissements, consulter si persiste.</li>
      <li><strong>Renfo spécifique continu :</strong> garde les <em>tibialis raises</em> 3–4×/sem même hors échauffement (2×15–20).</li>
      <li><strong>Technique de course :</strong> cadence 170–180 pas/min en accélérations, attaque médio‑pied douce, bruit de pas silencieux.</li>
      <li><strong>Consultation :</strong> en cas d’antécédents ou douleur qui augmente malgré l’adaptation, vois un kiné/médecin du sport.</li>
    </ul>
  </div>
</div>

</div><!-- /container -->

<script>window.currentUserId=<?php echo json_encode($_SESSION['user_id'] ?? null); ?>;</script>
<script src="script2.js" defer></script>
</body>
</html>
