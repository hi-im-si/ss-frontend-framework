const Footer = () => {
  return (
    <footer className="bg-gray-900 text-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div className="col-span-1 md:col-span-2">
            <h3 className="text-2xl font-bold text-gradient mb-4">
              Modern Framework
            </h3>
            <p className="text-gray-300 max-w-md">
              A modern, responsive frontend framework built with React, TypeScript, and Tailwind CSS.
              Designed for performance, accessibility, and developer experience.
            </p>
          </div>
          
          <div>
            <h4 className="text-lg font-semibold mb-4">Navigation</h4>
            <ul className="space-y-2">
              <li><a href="/" className="text-gray-300 hover:text-white transition-colors">Home</a></li>
              <li><a href="/about" className="text-gray-300 hover:text-white transition-colors">About</a></li>
              <li><a href="/contact" className="text-gray-300 hover:text-white transition-colors">Contact</a></li>
            </ul>
          </div>
          
          <div>
            <h4 className="text-lg font-semibold mb-4">Technology</h4>
            <ul className="space-y-2">
              <li className="text-gray-300">React 18</li>
              <li className="text-gray-300">TypeScript</li>
              <li className="text-gray-300">Tailwind CSS</li>
              <li className="text-gray-300">Vite</li>
            </ul>
          </div>
        </div>
        
        <div className="border-t border-gray-800 mt-8 pt-8 text-center">
          <p className="text-gray-400">
            © {new Date().getFullYear()} Modern Framework. Built with modern web technologies.
          </p>
        </div>
      </div>
    </footer>
  )
}

export default Footer