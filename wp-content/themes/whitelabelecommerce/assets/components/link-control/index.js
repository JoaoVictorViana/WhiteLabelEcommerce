// const { ToggleControl } = wp.components
const {__experimentalLinkControl } = wp.blockEditor;

import "./styles.scss"

const LinkControl = ({ link, attributes, setAttributes }) => {

  return (
    <>
      {/* <ToggleControl
        label="Exibir link"
        checked={attributes[link].active}
        onChange={active => setAttributes({ [link]: { ...attributes[link], active } })}
      /> */}

      {/* {attributes[link].active && ( */}
        <__experimentalLinkControl
          label="teste"
          value={{
            url: attributes[link].url,
            opensInNewTab: '_blank' === attributes[link].target,
            title: attributes[link].title
          }}
          onChange={({ url, opensInNewTab}) => {
            setAttributes({
              [link]: { ...attributes[link], target: opensInNewTab ? '_blank' : undefined, url },
            })
          }}
        />
      {/* )} */}
    </>
  )
}

export default LinkControl
