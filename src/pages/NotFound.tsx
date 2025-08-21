import { Link } from 'react-router-dom'

const NotFound = () => {
  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-50 animate-fade-in">
      <div className="max-w-md w-full text-center px-4">
        <div className="mb-8">
          <div className="text-9xl font-bold text-primary-600 mb-4">404</div>
          <h1 className="text-3xl font-bold text-gray-900 mb-4">
            Page Not Found
          </h1>
          <p className="text-lg text-gray-600 mb-8">
            Sorry, we couldn't find the page you're looking for. 
            It might have been moved, deleted, or you entered the wrong URL.
          </p>
        </div>
        
        <div className="space-y-4">
          <Link to="/" className="btn-primary w-full py-3 text-lg">
            Go Back Home
          </Link>
          <Link to="/contact" className="btn-secondary w-full py-3 text-lg">
            Contact Support
          </Link>
        </div>
        
        <div className="mt-12 text-gray-500">
          <p>If you believe this is an error, please</p>
          <Link to="/contact" className="text-primary-600 hover:text-primary-700 font-medium">
            contact our support team
          </Link>
        </div>
      </div>
    </div>
  )
}

export default NotFound