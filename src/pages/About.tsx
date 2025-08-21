const About = () => {
  const stats = [
    { label: 'Years Experience', value: '5+' },
    { label: 'Projects Completed', value: '100+' },
    { label: 'Happy Clients', value: '50+' },
    { label: 'Team Members', value: '15+' }
  ]

  const values = [
    {
      title: 'Innovation',
      description: 'We constantly explore new technologies and approaches to stay ahead of the curve.',
      icon: '🚀'
    },
    {
      title: 'Quality',
      description: 'Every line of code is written with attention to detail and best practices.',
      icon: '✨'
    },
    {
      title: 'Performance',
      description: 'We prioritize speed and efficiency in everything we build.',
      icon: '⚡'
    },
    {
      title: 'Accessibility',
      description: 'Our solutions are designed to work for everyone, regardless of ability.',
      icon: '♿'
    }
  ]

  return (
    <div className="animate-fade-in">
      {/* Hero Section */}
      <section className="bg-gradient-to-br from-secondary-50 to-secondary-100 py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 className="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
            About Our{' '}
            <span className="text-gradient">Framework</span>
          </h1>
          <p className="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
            We're passionate about creating modern, efficient, and beautiful web experiences. 
            Our framework is the result of years of experience and countless hours of development.
          </p>
        </div>
      </section>

      {/* Stats Section */}
      <section className="py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
            {stats.map((stat, index) => (
              <div key={index} className="text-center">
                <div className="text-4xl md:text-5xl font-bold text-primary-600 mb-2">
                  {stat.value}
                </div>
                <div className="text-gray-600 font-medium">
                  {stat.label}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Mission Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Our Mission
              </h2>
              <p className="text-lg text-gray-600 mb-6">
                To democratize modern web development by providing developers with a powerful, 
                intuitive, and performant framework that accelerates their workflow and enables 
                them to build exceptional digital experiences.
              </p>
              <p className="text-lg text-gray-600">
                We believe that great software should be accessible to everyone, and we're 
                committed to creating tools that make complex development tasks simple and enjoyable.
              </p>
            </div>
            <div className="bg-gradient-to-br from-primary-100 to-primary-200 rounded-2xl p-8">
              <div className="text-6xl text-center mb-4">🎯</div>
              <h3 className="text-2xl font-bold text-gray-900 text-center mb-4">
                Build Better, Faster
              </h3>
              <p className="text-gray-700 text-center">
                Our framework is designed to eliminate common development bottlenecks and 
                provide a smooth, enjoyable development experience.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Values Section */}
      <section className="py-20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
              Our Core Values
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              These principles guide everything we do and every decision we make.
            </p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {values.map((value, index) => (
              <div key={index} className="card text-center group hover:shadow-lg transition-all duration-300">
                <div className="text-4xl mb-4">{value.icon}</div>
                <h3 className="text-xl font-semibold text-gray-900 mb-2">
                  {value.title}
                </h3>
                <p className="text-gray-600">
                  {value.description}
                </p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Technology Stack */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
              Technology Stack
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Built with the latest and most reliable technologies in the industry.
            </p>
          </div>
          
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
            {[
              { name: 'React 18', version: '18.2.0', color: 'bg-blue-100 text-blue-800' },
              { name: 'TypeScript', version: '5.2.2', color: 'bg-blue-100 text-blue-800' },
              { name: 'Tailwind CSS', version: '3.3.5', color: 'bg-cyan-100 text-cyan-800' },
              { name: 'Vite', version: '5.0.0', color: 'bg-yellow-100 text-yellow-800' }
            ].map((tech, index) => (
              <div key={index} className="text-center">
                <div className={`${tech.color} rounded-lg px-4 py-2 mb-2 inline-block`}>
                  <span className="font-semibold">{tech.name}</span>
                </div>
                <div className="text-sm text-gray-500">{tech.version}</div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}

export default About