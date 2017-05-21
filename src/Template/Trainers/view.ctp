 <!--Trainers view-->
<fieldset>
    <legend><h1>Détails de l'entraineur n°<?= $trainer->id ?>: <?= $trainer->last_name." ".$trainer->first_name; ?></h1></legend>
    
    <ul class="side-nav">
        <li>
            <?= $this->Html->link($this->Html->image('add-icone.png', ['class' => 'ajout2', 'height' => '75px', 'width' => '75px', 'title' => 'Ajouter un entraineur']).'<span class="leg">Ajouter un entraineur</span>',
                          ['controller' => 'Trainers', 'action' => 'add'],
                          ['escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link($this->Html->image('edit-icon-view.png', ['class' => 'ajout2', 'height' => '40px', 'width' => '40px', 'title' => 'Modifier l\'entraineur']).'<span class="leg">Modifier</span>',
                          ['controller' => 'Trainers', 'action' => 'edit', $trainer->id],
                          ['escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink($this->Html->image('trash-log-view.png', ['class' => 'ajout2', 'height' => '40px', 'width' => '40px', 'title' => 'Supprimer l\'entraineur']).'<span class="leg">Supprimer</span>',
                          ['controller' => 'Trainers', 'action' => 'delete', $trainer->id],
                          ['escape' => false]) ?>
        </li>
    </ul>
    
    <table>
       <tbody class="view">
           <tr>
               <td>ID</td>
               <td class="detail"><?= $trainer->id ?></td>
           </tr>
           <tr>
               <td>Nom</td>
               <td class="detail"><?= $trainer->last_name ?></td>
           </tr>
           <tr>
               <td>Prénom</td>
               <td class="detail"><?= $trainer->first_name ?></td>
           </tr>
           <tr>
               <td>Naissance</td>
               <td class="detail"><?= $trainer->birth_date->format('d/m/Y') ?></td>
           </tr>
           <tr>
               <td>Sexe</td>
               <td class="detail"><?= $trainer->sex ?></td>
           </tr>
           <tr>
               <td>Club</td>
               <td class="detail"><?= $this->Html->link($trainer->club->name, ['controller' => 'Clubs', 'action' => 'view', $trainer->club->id], ['class' => 'lienhyp']) ?></td>
           </tr>
           <tr>
               <td>Spécialité</td>
               <td class="detail"><?= $this->Html->link($trainer->specialty->name, ['controller' => 'Specialties', 'action' => 'view', $trainer->specialty->id], ['class' => 'lienhyp']) ?></td>
           </tr>
       </tbody>
    </table>
    
    <fieldset>
       <legend><h2>Ses athlètes</h2></legend>
       <table>
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Nom</th>
                   <th>Prénom</th>
                   <th>Sexe</th>
                   <th>Date de naissance</th>
               </tr>
           </thead>
           <tbody>
               <?php foreach($trainer->athletes as $athlete): ?>
               <tr>
                   <td><?= $this->Html->link($athlete->id, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                   <td><?= $this->Html->link($athlete->last_name, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                   <td><?= $this->Html->link($athlete->first_name, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                   <td><?= $this->Html->link($athlete->sex, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                   <td><?= $this->Html->link($athlete->birth_date, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
               </tr>
               <?php endforeach; ?>
           </tbody>
       </table>
    </fieldset>
</fieldset>