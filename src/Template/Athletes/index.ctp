<fieldset>
    <legend><h1>Les athlètes</h1></legend>
    
    <ul class="side-nav">
        <li>
            <?= $this->Html->link($this->Html->image('add-icone.png', ['class' => 'ajout2', 'height' => '75px', 'width' => '75px', 'title' => 'Ajouter un athlète']).'<span class="leg">Un athlète</span>',
                          ['controller' => 'Athletes', 'action' => 'add'],
                          ['escape' => false]) ?>
        </li>
    </ul>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($athletes as $athlete): ?>
            <tr>
                    <td><?= $this->Html->link($athlete->id, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                    <td><?= $this->Html->link($athlete->last_name, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                    <td><?= $this->Html->link($athlete->first_name, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                    <td><?= $this->Html->link($athlete->birth_date, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                </a>    
                <td>
                    <?= $this->Html->link($this->Html->image('pen-ico.ico',['class' => 'a fa-pencil button alterar', 'height' => '20px', 'alt' => 'Modifier', 'title' => 'Modifier']),
                                                            ['controller' => 'Athletes', 'action' => 'edit', $athlete->id],
                                                            ['escape' => false]) ?>
                    <?= $this->Form->postLink($this->Html->image('trash-ico.png', ['class' => 'fa fa-trash button excluir', 'height' => '20px', 'alt' => 'Supprimer', 'title' => 'Supprimer']),
                                                            ['controller' => 'Athletes', 'action' => 'delete', $athlete->id],
                                                            ['escape' => false]); ?>
                </td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <div class="pagina">
                    <td class="li_prev" colspan="2"><?= $this->Paginator->prev('<<<') ?></td>
                    <td class="li_nb"><?= $this->Paginator->numbers() ?></td>
                    <td class="li_next" colspan ="2"><?= $this->Paginator->next('>>>', ['class' => 'pagina']) ?></td>
                </div>
            </tr>
        </tfoot>
    </table>
</fieldset>