<fieldset>
<legend><h1>Ajout d'un entraineur</h1></legend>
<p><?= $this->Form->create($trainer) ?></p>
<p><?= $this->Form->input('last_name', ['label' => 'Nom : ']); ?></p>
<p><?= $this->Form->input('first_name', ['label' => 'Prénom : ']); ?></p>
<p><?= $this->Form->input('birth_date', [
                                            'label' => 'Date de naissance',
                                            'minYear' => date('Y') - 100,
                                            'maxYear' => date('Y') - 10,
                                        ]
                         );
?><p>
<p><?= $this->Form->input('sex', ['label' => 'Sexe : ', 'option' => $sexes]); ?></p>
<p><?= $this->Form->input('club_id', ['label' => 'Club : ', 'option' => $clubs]); ?></p>
<p><?= $this->Form->input('old_athlete', ['label' => 'Ancien athlète']); ?></p>

<p><?= $this->Form->input('specialty_id', ['label' => 'Spécialité : ', 'option' => $specialties]); ?></p>


<p><?= $this->Form->button(__('Ajouter')) ?></p>
<p><?= $this->Form->end(); ?></p>
</fieldset>