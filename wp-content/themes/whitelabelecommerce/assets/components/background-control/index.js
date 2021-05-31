const { PanelBody, ColorPicker, ColorPalette } = wp.components

const BackgroundControl = ({ background, attributes, setAttributes }) => {
  return (
    <PanelBody title="Configurações de cor de fundo" initialOpen={false}>
      <ColorPalette
        colors={[
          { name: 'orange', color: '#e1922d' },
          { name: 'red', color: '#b82a26' }
        ]}
        onChange={value => setAttributes({ [background]: value })}
        value={ attributes[background] }
        disableCustomColors
        clearable={false}
      />
      <ColorPicker
        color={ attributes[background] }
        onChangeComplete={value => setAttributes({ [background]: value.hex})}
        disableAlpha
      />
    </PanelBody>
  )
}

export default BackgroundControl
