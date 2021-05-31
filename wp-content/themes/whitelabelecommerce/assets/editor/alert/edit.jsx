const { RichText } = wp.blockEditor

const Edit = ({ 
  attributes,
  setAttributes
}) => {
  const { text } = attributes

  return (
    <>
      <section className="AlertBox">
        <RichText
          tagName='p'
          value={text}
          className='m-0 AlertBox-text'
          placeholder='Texto aqui.'
          keepPlaceholderOnFocus
          onChange={text => setAttributes({ text })}
        />
      </section>
    </>
  )
}

export default Edit
