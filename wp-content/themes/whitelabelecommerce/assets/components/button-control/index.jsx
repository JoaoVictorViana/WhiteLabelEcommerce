const { TextControl, ColorPalette } = wp.components
const {__experimentalLinkControl } = wp.blockEditor;

const ButtonControl = ({ button, control, attributes, setAttributes }) => {
  const colors = {
    '#A1F2FE': 'anakiwa',
    '#FFB4DC': 'cotton-cand',
  }

  return (
    <>
      <__experimentalLinkControl
        label='URL'
        value={{
          url: attributes[button].url,
          opensInNewTab: '_blank' === attributes[button].target,
          title: attributes[button].title
        }}
        onChange={({ url, opensInNewTab}) => {
          setAttributes({
            [button]: { ...attributes[button], target: opensInNewTab ? '_blank' : undefined, href: url },
          })
        }}
      />

      {control && (
        <ColorPalette
          colors={[
            { name: 'anakiwa', color: '#A1F2FE' },
            { name: 'cotton-cand', color: '#FFB4DC' },
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
