const { registerBlockType } = wp.blocks

import attributes from './attributes'
import Edit from './edit'
import Save from './save'

registerBlockType('app/alert', {
  title: 'Alertas',
  description: 'Exiba informações rápidas e diretas',
  icon: 'admin-site',
  category: 'layout',
  attributes,
  edit: props => <Edit {...props} />,
  save: props => <Save {...props} />
})
