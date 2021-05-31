const Save = ({ 
  attributes 
}) => {
  const { text } = attributes

  return (
    <section className="container pl-lg-0 pr-lg-0">
      <section className="AlertBox">
        <p className="m-0 AlertBox-text" dangerouslySetInnerHTML={{ __html: text }} />
      </section>
    </section>
  )
}

export default Save
