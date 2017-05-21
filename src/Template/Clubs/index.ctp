<fieldset>
    <legend><h1>Liste des clubs</h1></legend>
    
    <ul class="side-nav">
        <li>
            <?= $this->Html->link($this->Html->image('add-icone.png', ['class' => 'ajout2', 'height' => '75px', 'width' => '75px', 'title' => 'Ajouter un athlète']).'<span class="leg">Un club</span>',
                          ['controller' => 'Clubs', 'action' => 'add'],
                          ['escape' => false]) ?>
        </li>
    </ul>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clubs as $club): ?>
                
                    <tr>
                        
                        <td><?= $this->Html->link($club->id, ['controller' => 'Clubs', 'action' => 'view', $club->id], ['class' => 'lienhyp']) ?></td>
                        <td><?= $this->Html->link($club->name, ['controller' => 'Clubs', 'action' => 'view', $club->id], ['class' => 'lienhyp']) ?></td>
                        <td>
                            <?= $this->Html->link($this->Html->image('pen-ico.ico',['class' => 'a fa-pencil button alterar', 'height' => '20px', 'alt' => 'Modifier', 'title' => 'Modifier']),
                                                                    ['controller' => 'Clubs', 'action' => 'edit', $club->id],
                                                                    ['escape' => false]) ?>
                            <?= $this->Form->postLink($this->Html->image('trash-ico.png', ['class' => 'fa fa-trash button excluir', 'height' => '20px', 'alt' => 'Supprimer', 'title' => 'Supprimer']),
                                                                    ['controller' => 'Clubs', 'action' => 'delete', $club->id],
                                                                    ['escape' => false]); ?>
                        </td>
                    </tr>
            
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <div class="pagina">
                    <td class="li_prev"><?= $this->Paginator->prev('<<<') ?></td>
                    <td class="li_nb"><?= $this->Paginator->numbers() ?></td>
                    <td class="li_next"><?= $this->Paginator->next('>>>', ['class' => 'pagina']) ?></td>
                </div>
            </tr>
        </tfoot>
    </table>
</fieldset>