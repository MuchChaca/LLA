<fieldset>
<legend><h1>Modification d'un athlète</h1></legend>
<p><?= $this->Form->create($athlete) ?></p>
<p><?= $this->Form->input('last_name', ['label' => 'Nom : ']); ?></p>
<p><?= $this->Form->input('first_name', ['label' => 'Prénom : ']); ?></p>
<p><?= $this->Form->input('birth_date', [
                                            'label' => 'Date de naissance',
                                            'minYear' => date('Y') - 70,
                                            'maxYear' => date('Y') - 10,
                                        ]
                         );
?><p>
<p><?= $this->Form->input('sex', ['label' => 'Sexe : ', 'option' => $sexes]); ?></p>
<p><?= $this->Form->input('club_id', ['label' => 'Club : ', 'option' => $clubs]); ?></p>
<p><?= $this->Form->input('category_id', ['label' => 'Catégorie : ', 'option' => $categories]); ?></p>
<p><?= $this->Form->input('trainer_id', ['label' => 'Entraineur : ', 'option' => $trainers]); ?></p>

<p><?= $this->Form->button(__('Modifier')) ?></p>
<p><?= $this->Form->end(); ?></p>
</fieldset>