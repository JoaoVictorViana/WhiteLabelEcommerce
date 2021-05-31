const { TextControl, ColorPalette } = wp.components

const ButtonControl = ({ button, control, attributes, setAttributes }) => {
  const colors = {
    '#54AF0A': 'christi',
    '#5F7588': 'lynch'
  }

  return (
    <>
      <TextControl
        label='URL'
        value={attributes[button].href}
        onChange={href => setAttributes({ [button]: { ...attributes[button], href } })}
      />

      {control && (
        <ColorPalette
          colors={[
            { name: 'christi', color: '#54AF0A' },
            { name: 'lynch', color: '#5F7588' }
          ]}
          onChange={color => {
            setAttributes({
              [button]: {
                ...attributes[button],
                colorName: colors[color],
                colorHex: color
              }
            })
          }}
          value={attributes[button].colorHex}
          disableCustomColors
          clearable={false}
        />
      )}
    </>
  )
}

ButtonControl.defaulProps = {
  control: true
}

export default ButtonControl
