 <!--Athletes view-->
<fieldset>
    <legend><h1>Détails de l'athlète n°<?= $athlete->id ?>: <?= $athlete->last_name." ".$athlete->first_name; ?></h1></legend>
    
    <ul class="side-nav">
        <li>
            <?= $this->Html->link($this->Html->image('add-icone.png', ['class' => 'ajout2', 'height' => '75px', 'width' => '75px', 'title' => 'Ajouter un athlète']).'<span class="leg">Ajouter un athlète</span>',
                          ['controller' => 'Athletes', 'action' => 'add'],
                          ['escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link($this->Html->image('edit-icon-view.png', ['class' => 'ajout2', 'height' => '40px', 'width' => '40px', 'title' => 'Modifier l\'athlète']).'<span class="leg">Modifier</span>',
                          ['controller' => 'Athletes', 'action' => 'edit', $athlete->id],
                          ['escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink($this->Html->image('trash-log-view.png', ['class' => 'ajout2', 'height' => '40px', 'width' => '40px', 'title' => 'Supprimer l\'athlète']).'<span class="leg">Supprimer</span>',
                          ['controller' => 'Athletes', 'action' => 'delete', $athlete->id],
                          ['escape' => false]) ?>
        </li>
    </ul>
    
    <table>
       <tbody class="view">
           <tr>
               <td>ID</td>
               <td class="detail"><?= $athlete->id ?></td>
           </tr>
           <tr>
               <td>Nom</td>
               <td class="detail"><?= $athlete->last_name ?></td>
           </tr>
           <tr>
               <td>Prénom</td>
               <td class="detail"><?= $athlete->first_name ?></td>
           </tr>
           <tr>
               <td>Naissance</td>
               <td class="detail"><?= $athlete->birth_date->format('d/m/Y') ?></td>
           </tr>
           <tr>
               <td>Sexe</td>
               <td class="detail"><?= $athlete->sex ?></td>
           </tr>
           <tr>
               <td>Club</td>
               <td class="detail"><?= $this->Html->link($athlete->club->name, ['controller' => 'Clubs', 'action' => 'view', $athlete->club->id], ['class' => 'lienhyp']) ?></td>
           </tr>
           <tr>
               <td>Catégorie</td>
               <td class="detail"><?= $this->Html->link($athlete->category->name, ['controller' => 'Categories', 'action' => 'view', $athlete->category->id], ['class' => 'lienhyp']) ?></td>
           </tr>
       </tbody>
    </table>
    
    <fieldset>
       <legend>Son entraineur : </legend>
       <p>
           <?= $this->Html->link($athlete->trainer->last_name.' '.$athlete->trainer->first_name, ['controller' => 'Trainers', 'action' => 'view', $athlete->trainer->id]) ?>
       </p>
    </fieldset>
</fieldset>