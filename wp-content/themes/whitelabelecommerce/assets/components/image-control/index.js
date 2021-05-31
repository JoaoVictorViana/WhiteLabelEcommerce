const { MediaUpload, MediaUploadCheck } = wp.editor
const { Button, RangeControl, ColorPalette } = wp.components

import './styles.scss'

const ImageControl = ({ image, control, palette, description, attributes, setAttributes }) => {
  const colors = {
    '#54AF0A': 'christi',
    '#5F7588': 'lynch',
    '#168EC1': 'eastern'
  }

  return (
    <div className='imageControl'>
      {description && <p>{description}</p>}
      <MediaUploadCheck>
        {attributes[image].src && (
          <div className='imageControl-thumb' style={{ backgroundImage: `url(${attributes[image].src})` }} />
        )}

        <MediaUpload
          onSelect={media => {
            setAttributes({
              [image]: {
                ...attributes[image],
                src: media.url,
                id: media.id,
                alt: media.alt || media.title,
                width: media.width,
                height: media.height
              }
            })
          }}
          allowedTypes={['image']}
          value={attributes[image].id}
          render={({ open }) => (
            <Button isPrimary onClick={open}>
              {attributes[image].src ? 'Alterar imagem' : 'Escolher imagem'}
            </Button>
          )}
        />

        {attributes[image].src && (
          <Button
            isLink
            isDestructive
            onClick={() =>
              setAttributes({ [image]: { ...attributes[image], src: '', id: '', x: 0, y: 0, width: '', height: '' } })
            }
          >
            Remover imagem
          </Button>
        )}
      </MediaUploadCheck>
      {control && attributes[image].src && (
        <>
          <hr />

          <RangeControl
            label='posição da imagem horizontal'
            value={attributes[image].x}
            onChange={x => setAttributes({ [image]: { ...attributes[image], x } })}
            min={-100}
            max={100}
          />
          <RangeControl
            label='posição da imagem vertical'
            value={attributes[image].y}
            onChange={y => setAttributes({ [image]: { ...attributes[image], y } })}
            min={-100}
            max={100}
          />
        </>
      )}

      {palette && (
        <ColorPalette
          colors={[
            { name: 'christi', color: '#54AF0A' },
            { name: 'lynch', color: '#5F7588' },
            { name: 'eastern', color: '#168EC1' }
          ]}
          onChange={color => {
            setAttributes({
              [image]: {
                ...attributes[image],
                colorName: colors[color],
                colorHex: color
              }
            })
          }}
          value={attributes[image].colorHex}
          disableCustomColors
          clearable={false}
        />
      )}
    </div>
  )
}

ImageControl.defaultProps = {
  control: false,
  palette: false
}

export default ImageControl
